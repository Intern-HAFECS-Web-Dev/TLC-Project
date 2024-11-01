<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Illuminate\View\View;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            event(new Registered($user));
    
            // $user->assignRole('user');

            Auth::login($user);
    

            // return redirect(route('user', absolute: false));
            return redirect()->route('additional.form', [
                'user' => $user->id,
            ]);

        } catch(\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat mendaftar : '. $e->getMessage()])->withInput();
        };
    }

    public function showForm(User $user)
    {

    $provinces = Province::all();
    return view('auth.registerAdditionalInfo', [
        'user' => $user,
        'provinces' => $provinces,
        'title' => 'Register'
    ]);
    }
    
    public function storeAdditionalInfo(Request $request, User $user) {
        // dd($request);

        $request->validate([
            'fullname' => ['nullable', 'string', 'max:30'],
            'nik' => ['nullable', 'numeric'],
            'instansi' => 'nullable|string',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'no_wa' => 'nullable',
            'provinsi' => 'nullable',
            'kabupaten' => 'nullable',
            'kecamatan' => 'nullable',
            'kelurahan' => 'nullable',
            'profile_image' => 'nullable'
        ]);


        $userProfile = new UserProfile();
        $userProfile->user_id = Auth::user()->id;
        $userProfile->fullname = $request->fullname;
        $userProfile->nik = $request->nik;
        $userProfile->instansi = $request->instansi;
        $userProfile->tempat_lahir = $request->tempat_lahir;
        $userProfile->tanggal_lahir = $request->tanggal_lahir;
        $userProfile->jenis_kelamin = $request->jenis_kelamin;
        $userProfile->no_wa = $request->no_wa;
        $userProfile->provinsi = $request->provinsi;
        $userProfile->kabupaten = $request->kabupaten;
        $userProfile->kecamatan = $request->kecamatan;
        $userProfile->kelurahan = $request->kelurahan;

        $userProfile->profile_image = null;
        if ($request->profile_image) {
            // $path = $request->file('profile_image')->store('profileImg');
            // $userProfile->profile_image = basename($path);
        //    $path = Storage::put('profile_image', $request->profile_image);
           $path = $request->file('profile_image')->store('images');
           $userProfile->profile_image = $path;
            // $imageName = time().'.'.$request->profile_image->extension();  
            // $request->profile_image->move(public_path('images'), $imageName);
            // $userProfile->profile_image = $request->profile_image;
        };

            $idd = Auth::user()->id;
            $user = User::find($idd);
            $user->assignRole('user');
            $userProfile->save();

        return redirect()->route('userDashboard.index')->with('success', 'Data berhasil disimpan');
    }
    public function shows($id)
    {
    $user = User::with('UserProfile')->find($id);

        // Ambil nama lokasi berdasarkan ID
        $province = Province::find($user->province_id);
        $regency = Regency::find($user->regency_id);
        $district = District::find($user->district_id);
        $village = Village::find($user->village_id);

        return view('auth.test', compact('user', 'province', 'regency', 'district', 'village'));
    }
}
