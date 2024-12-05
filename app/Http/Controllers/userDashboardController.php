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
use RealRashid\SweetAlert\Facades\Alert;

class userDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userProfile = UserProfile::with('user')->where('user_id', $user->id)->firstOrFail();
        $province = Province::all();
        return view('dashboard.userDashboard', [
            'title' => 'User Dashboard',
            'province' => $province,
            'user' => $userProfile
        ]);
    }

    public function sertifikasiIndex() {
        // return view('userDashboard.sertifikasi');
        $user = Auth::user();
        $userProfile = UserProfile::with('user')->where('user_id', $user->id)->firstOrFail();
        $province = Province::all();
        return view('userDashboard.sertifikasi', [
            'title' => 'User Dashboard',
            'province' => $province,
            'user' => $userProfile
        ]);

    }

    public function profileIndex() {
        $user = Auth::user();
        $userProfile = UserProfile::with('user')->where('user_id', $user->id)->firstOrFail();
        $province = Province::all();
        return view('userDashboard.profile', [
            'title' => 'User Profile',
            'provinces' => $province,
            'user' => $userProfile
        ]);
    }

    public function myCertificationIndex() {
        $user = Auth::user();
        $userProfile = UserProfile::with('user')->where('user_id', $user->id)->firstOrFail();
        $province = Province::all();
        return view('userDashboard.myCertification', [
            'title' => 'User Certification',
            'province' => $province,
            'user' => $userProfile
        ]);
    }

    public function transaksiIndex() {
        // return view('userDashboard.transaksi');
        $user = Auth::user();
        $userProfile = UserProfile::with('user')->where('user_id', $user->id)->firstOrFail();
        $province = Province::all();
        return view('userDashboard.transaksi', [
            'title' => 'User Dashboard',
            'province' => $province,
            'user' => $userProfile
        ]);
    }

    public function kategoriLevelIndex() {
        $user = Auth::user();
        $userProfile = UserProfile::with('user')->where('user_id', $user->id)->firstOrFail();
        $province = Province::all();
        return view('userDashboard.kategoriLevelIndex',[
            'title' => 'Category Level',
            'user' => $userProfile
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $dicoding = Province::find($id);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function myProfileStore(Request $request)
{
    $validatedData = $request->validate([
        'name' => ['required', 'string'],
        'fullname' => ['required', 'string'],
        'no_wa' => ['required', 'numeric', 'digits_between:1,13'],
        'nik' => ['required', 'string', 'digits_between:1,16'],
        'instansi' => ['required', 'string'],
        'tempat_lahir' => ['required', 'string'],
        'jenis_kelamin' => ['required', 'string'],
        'tanggal_lahir' => ['required', 'date'],
        'provinsi' => ['required', 'string'],
        'kabupaten' => ['required', 'string'],
        'kecamatan' => ['required', 'string'],
        'kelurahan' => ['required', 'string'],
        'custom_instansi' => ['nullable', 'string']
    ]);

    DB::beginTransaction();

    try {

        $profile = $request->user();
        $profileId = $profile->id;

        $userProfile = UserProfile::with('user')->where('user_id', $profileId)->firstOrFail();

        $userProfile->update([
            'fullname' => $validatedData['fullname'],
            'no_wa' => $validatedData['no_wa'],
            'nik' => $validatedData['nik'],
            'instansi' => !empty($validatedData['custom_instansi']) ? $validatedData['custom_instansi'] : $validatedData['instansi'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'provinsi' => $validatedData['provinsi'],
            'kabupaten' => $validatedData['kabupaten'],
            'kecamatan' => $validatedData['kecamatan'],
            'kelurahan' => $validatedData['kelurahan'],
        ]);

        $user = $userProfile->user;
        $user->update([
            'name' => $validatedData['name']
        ]);

        DB::commit();

        Alert::success('Berhasil', 'Profil Anda telah diperbarui.');
        return redirect()->route('userProfile.index');

    } catch (Exception $e) {
        DB::rollBack();

        if(!app()->isProduction()) {
            $e->getMessage();
        }

        Log::error('Error updating profile: ' . $e->getMessage());

        Alert::error('Error', 'Terjadi kesalahan saat memperbarui profil Anda.');
        return back();
    }
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$profile = $request->user();
        // $profileId = $profile->id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
