<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class usersController extends Controller
{
    public function destroyAll() {

        
        $users = User::role('user')->get();
        $userProfiles = UserProfile::all();
    
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
            
            return redirect()->route('users.index');
        }
        catch(Exception $e) {
            Log::error('Input Users Failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan Saat input Users: ' . $e->getMessage()])->withInput();
        }
    }

    public function testing () {
        return view('admin.users.testing', [
            'title' => 'testing',
            'navTitle' => 'testing'
        ]);
    }
}
