<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class adminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $users = User::role('user')->count();
        return view('dashboard.adminDashboard', [
            'title' => 'AdminDashboard',
            'role' => 'Admin',
            'navTitle' => 'Admin Dashboard',
            // 'user' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function adminDashboard()
    {
        $users = User::role('user')->count();
        $asesor = User::role('asesor')->count();
        return view('admin.dashboard.index', [
            'title' => 'AdminDashboard',
            'user' => $users,
            'asesor' => $asesor,
            'navTitle' => 'Admin Dashboard'
        ]);
    }
}
