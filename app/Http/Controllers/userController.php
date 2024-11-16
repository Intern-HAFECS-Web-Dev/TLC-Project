<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Province;
use App\Models\UserProfile;
use Illuminate\Http\Request;
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
    // Memanggil paginate sebelum get()
    $userProfiles = UserProfile::with('user')->latest()->paginate(8);
    $users = User::role('user')->get();

    return view('admin.users.index', [
        'title' => 'users',
        'users' => $users,
        'userProfile' => $userProfiles, 
        'navTitle' => 'Table Users'
    ]);
}

    public function create()
    {
        $provinces = Province::all();
        return view('admin.users.create', [
            'title' => 'Create User',
            'navTitle' => 'Create User',
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'name' => ['nullable', 'string'],
        'email' => ['nullable', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
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
        'custom_instansi' => ['nullable', 'string']
    ]);

    // dd($request);

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
            'fullname' => $request->fullname,
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
        return redirect()->route('users.index')->with('success', 'Data berhasil disimpan');
        
    
    }

    public function show(string $id)
    {
        //
    }
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

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['nullable', 'string'],
            'email' => ['nullable', 'string', 'lowercase', 'email', 'max:255'],
            // 'password' => ['nullable', Password::defaults()],
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
        if(!isset($request->update_password)) {
            $users->update($request->except('update_password'));
        }
        return redirect()->route('users.index');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $userProfile = UserProfile::where('user_id', $id)->firstOrFail();
        
        if ($userProfile->profile_image) {
            Storage::delete($userProfile->profile_image);
        }

        $user->removeRole('user');
        $user->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus!');
        return redirect()->route('users.index');
    }

    public function destroyAll() {

        
        $users = User::role('user')->get();
        $userProfiles = UserProfile::all();
    
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
            return redirect()->route('users.index');
    }
}


