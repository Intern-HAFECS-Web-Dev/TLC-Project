<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Illuminate\View\View;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Log;
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

        } catch(Exception $e) {
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
            'fullname' => ['required', 'string', 'max:30'],
            'nik' => ['required', 'numeric'],
            'instansi' => ['required', 'string'],
            'tempat_lahir' => ['required',  'string'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => 'required',
            'no_wa' => ['required', 'numeric'],
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'custom_instansi' => ['nullable', 'string'],
            'profile_image' => 'nullable'
        ]);

        try {

            $userProfile = new UserProfile();
            $userProfile->user_id = Auth::user()->id;
            $userProfile->fullname = $request->fullname;
            $userProfile->nik = $request->nik;
            
            if ($request->custom_instansi) {
                $userProfile->instansi = $request->custom_instansi;
            } else {
            $userProfile->instansi = $request->instansi;
        }
        
        $userProfile->tempat_lahir = $request->tempat_lahir;
        $userProfile->tanggal_lahir = $request->tanggal_lahir;
        $userProfile->jenis_kelamin = $request->jenis_kelamin;
        $userProfile->no_wa = $request->no_wa;
        $userProfile->provinsi = $request->provinsi;
        $userProfile->kabupaten = $request->kabupaten;
        $userProfile->kecamatan = $request->kecamatan;
        $userProfile->kelurahan = $request->kelurahan;
        
        if ($request->profile_image) 
        {
            $path = $request->file('profile_image')->store('images');
            $userProfile->profile_image = $path;
            
        } 
        else if (!isset($request->profile_image))
        {
            $userProfile->profile_image = 'images/blankProfile.png';
        }
        
        if (isset($userProfile)) {
            // assign role ketika regist
            if (!$user->hasRole('user')) {
                $user->assignRole('user');
            }

            // assign akses level A
            if (!$user->hasPermissionTo('acces_level_A')) {
                $user->givePermissionTo('acces_level_A');
            }
            // $idd = Auth::user()->id;
            // $user = User::find($idd);
            $user->givePermissionTo('acces_level_A');
            $userProfile->save();
        }
        
        return redirect()->route('userDashboard.index')->with('success', 'Data berhasil disimpan');
        }
        
        catch(Exception $e) {
            Log::error('Register Account step 2 failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat ingin membuat akun baru: ' . $e->getMessage()])->withInput();
        }
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
