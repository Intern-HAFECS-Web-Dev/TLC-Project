<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Province;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        return view('userDashboard.kategoriLevelIndex');
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

    public function myProfileStore(Request $request ,string $id ) {
        $request->validate([
            'name' => ['required', 'string'],
            'fullname' => ['required', 'string'],
            'no_wa' => ['required', 'numeric', 'digits_between:1, 15'],
            'nik' => ['required', 'string', 'digits_between:1, 17'],
            'instansi' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'provinsi' => ['nullable', 'string'],
            'kabupaten' => ['nullable', 'string'],
            'kecamatan' => ['nullable', 'string'],
            'kelurahan' => ['nullable', 'string'],
            'custom_instansi' => ['nullable', 'string']
        ]);

        dd($request);

        $profile = $request->user();
        $profileId = $profile->id;
        // dd($request);
        try {
            // $user = UserProfile::with('user')
            DB::beginTransaction();

            DB::commit();
            DB::rollBack();

        } catch(Exception $e) {

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
