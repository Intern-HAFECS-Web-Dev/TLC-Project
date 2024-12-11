<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Province;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil input pencarian
        $search = request()->input('search');

        $userProfiles = UserProfile::with('user')
            ->when($search, function ($query) use ($search) {
                $query->where('fullname', 'LIKE', '%' . $search . '%')
                    ->orWhere('nik', 'LIKE', '%' . $search . '%')
                    ->orWhere('tempat_lahir', 'LIKE', '%' . $search . '%')
                    ->orWhereHas('user', function ($query) use ($search) {
                        $query->where('name', 'LIKE', '%' . $search . '%')
                            ->orWhere('email', 'LIKE', '%' . $search . '%');
                    });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $users = User::role('user')->get();

        return view('admin.users.index', [
            'title' => 'Asesi Index',
            'users' => $users,
            'userProfile' => $userProfiles,
            'navTitle' => 'Table Asesi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        return view('admin.users.create', [
            'title' => 'Create User',
            'navTitle' => 'Table Asesi',
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'name' => ['required', 'string'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', Password::defaults()],
        'fullname' => 'nullable|string|max:255',
        'no_wa' => ['numeric', 'nullable', 'digits_between:1,15'],
        'nik' => ['nullable', 'string', 'digits_between:1,17'],
        'instansi' => ['nullable', 'string'],
        'tempat_lahir' => ['nullable', 'string'],
        'jenis_kelamin' => ['nullable', 'string'],
        'tanggal_lahir' => ['nullable', 'date'],
        'provinsi' => ['nullable', 'string'],
        'kabupaten' => ['nullable', 'string'],
        'kecamatan' => ['nullable', 'string'],
        'kelurahan' => ['nullable', 'string'],
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'custom_instansi' => ['nullable', 'string']
    ]);

    // dd($request);

    try {
        // Create User
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : null,
        ]);

        $user->assignRole('user');
        event(new Registered($user));

        // Create User Profile
        $userProfile = new UserProfile([
            'user_id' => $user->id,
            'fullname' => isset($request->fullname) ? $request->fullname : $request->name,
            'nik' => $request->nik,
            'instansi' => $request->custom_instansi ?? $request->instansi,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_wa' => $request->no_wa,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'profile_image' => $request->file('profile_image')
                ? $request->file('profile_image')->store('images')
                : 'images/blankProfile.png'
        ]);

        $userProfile->save();
        Alert::success('success', 'Data User Baru Berhasil Ditambahkan!');
        return redirect()->route('admin.users.index')->with('success', 'Data berhasil disimpan');


    } catch (Exception $e) {
        Log::error('User registration failed: ' . $e->getMessage());
        return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat mendaftar: ' . $e->getMessage()])->withInput();
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = UserProfile::with('user')->findOrFail($id);
        // dd($users);
        return view('admin.users.show', [
            'title' => 'Show Asesi',
            'navTitle' => 'Table Asesi',
            'users' => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provinces = Province::all();
        $users = UserProfile::with('user')->findOrFail($id);
        return view('admin.users.edit', [
            'title' =>  'Edit User',
            'navTitle' => 'Edit User',
            'users' =>  $users,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['nullable', 'string'],
            'email' => ['nullable', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['nullable', Password::defaults()],
            'fullname' => 'nullable|string|max:255',
            'no_wa' => ['numeric', 'nullable', 'digits_between:1,15'],
            'nik' => ['nullable', 'string'],
            'instansi' => ['nullable', 'string'],
            'tempat_lahir' => ['nullable', 'string'],
            'jenis_kelamin' => ['nullable', 'string'],
            'tanggal_lahir' => ['nullable', 'date'],
            'provinsi' => ['nullable', 'string'],
            'kabupaten' => ['nullable', 'string'],
            'kecamatan' => ['nullable', 'string'],
            'kelurahan' => ['nullable', 'string'],
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'custom_instansi' => ['nullable', 'string'],
            'update_password' => 'nullable'
        ]);

        $users = UserProfile::with('user')->findOrFail($id);
        $users->update($request->except('update_password'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();

    try {
        $user = User::find($id);
        $userProfile = UserProfile::where('user_id', $id)->firstOrFail();

        if ($userProfile->profile_image) {
            Storage::delete($userProfile->profile_image);
        }

        $user->removeRole('user');
        $user->delete();
        DB::commit();
        Alert::success('Berhasil', 'Data Berhasil Dihapus!');
        return redirect()->route('users.index');
    } catch (Exception $e) {
        DB::rollBack();
        return redirect()->route('admin.users.index')->with('error', 'Error deleting user: ' . $e->getMessage());
    }
    }

    public function destroyAll() {


        $users = User::role('user')->get();
        $userProfiles = UserProfile::all();

        DB::beginTransaction();
        try {
            foreach ($userProfiles as $userProfile) {
                if ($userProfile->profile_image) {
                    Storage::delete($userProfile->profile_image);
                }
                $userProfile->delete();
            }

            foreach ($users as $user) {
                $user->removeRole('user');
                $user->delete();
            }
            DB::commit();
            return redirect()->route('users.index');
        }
        catch(Exception $e) {
            Log::error('Delete All Users Failed: ' . $e->getMessage());

            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat ingin menghapus all users: ' . $e->getMessage()])->withInput();
        }
    }

    public function downloadImage(string $id) {

        $userProfile = UserProfile::with('user')->findOrFail($id);
        $profile_image = $userProfile->profile_image;
        $path = storage_path('app/public/'. $profile_image);

        if(!file_exists($path)) {
            return redirect()->back()->with('error', 'file tidak ditemukan');
        }
        $downloadName = str_replace(' ', '_', $userProfile->user->name) . '.jpg';

        return response()->download($path, $downloadName);
    }

}
