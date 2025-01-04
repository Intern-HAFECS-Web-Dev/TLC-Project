<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\UserDashboardImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class UserDashboardImageController extends Controller
{
    public function index()
    {
        $image = UserDashboardImage::all() ?? null;
        return view('admin.UserDashboardImage.index', [
            'title' => 'Users Dashboard Image',
            'navbar' => 'Users Dashboard Image',
            'image' => $image
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,gif,svg'],
        ]);

        DB::beginTransaction();

        try {
            // Simpan Image
            $imagePath = $request->image->store('public/dashboardImage');

            // Simpan ke Database
            UserDashboardImage::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imagePath
            ]);

            DB::commit();
            Alert::success('success', 'Data Image Berhasil ditambahkan');
            return redirect()->route('admin.image.dashboard');

        } catch(Exception $th) {

            DB::rollBack();
            Log::error('Add Image Failed: ' . $th->getMessage());
            return redirect()->back()->withInput();
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
