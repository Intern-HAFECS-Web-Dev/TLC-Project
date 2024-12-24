<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;

class LevelSettingsController extends Controller
{

    public function index()
    {
        $level = Level::all();
        return view('admin.category.settings', [
            'title' => 'Level Settings',
            'navbar' => 'Level Settings',
            'levels' => $level
        ]);

    }

    public function create()
    {
        return view('admin.category.settingsCreate', [
            'title' => 'Create New Levels',
            'navTitle' => 'Create New Levels',
        ]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'duration' => ['required', 'numeric'],
            'benefit' => ['required', 'string'],
            'condition' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'discount' => ['required', 'numeric']
        ]);

        DB::beginTransaction();

        try {
            $count_finalPrice = $request->price - $request->discount;
            $level = Level::create([
                'name' => $request->name,
                'duration' => $request->duration,
                'benefit' => $request->benefit,
                'condition' => $request->condition,
                'price' => $request->price,
                'discount' => $request->discount,
                'final_price' => $count_finalPrice

            ]);
            DB::commit();

            Alert::success('success', 'Data Level Baru Berhasil Ditambahkan!');
            return redirect()->route('admin.settings.index')->with('success', 'Data Berhasil Ditambahkan');

        } catch(Exception $e) {

            DB::rollBack();
            Log::error('Level creation failed: ' . $e->getMessage(), ['request' => $request->all()]);
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat ingin menambah Levels baru: ' . $e->getMessage()])->withInput();
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $levels = Level::findOrFail($id);
        return view('admin.category.settingsEdit', [
            'title' => 'Edit New Levels',
            'navTitle' => 'Edit New Levels',
            'levels' => $levels,
        ]);
    }

    public function update(Request $request, string $id)
    {
        // dd($request->all());
    $request->validate([
        'name' => ['required', 'string'],
        'duration' => ['required', 'numeric'],
        'benefit' => ['required', 'string'],
        'condition' => ['required', 'string'],
        'price' => ['required', 'numeric'],
        'discount' => ['required', 'numeric']
    ]);

    DB::beginTransaction();

    try {
        $level = Level::findOrFail($id);
        $discount = $request->price * $request->discount / 100;
        $count_finalPrice = $request->price - $discount;


        $level->update([
            'name' => $request->name,
            'duration' => $request->duration,
            'benefit' => $request->benefit,
            'condition' => $request->condition,
            'price' => $request->price,
            'discount' => $request->discount,
            'final_price' => $count_finalPrice
        ]);

        DB::commit();

        Alert::success('success', 'Data Level Berhasil Diperbarui!');
        return redirect()->route('admin.settings.index')->with('success', 'Data Berhasil Diperbarui');

    } catch (Exception $e) {
        DB::rollBack();
        Log::error('Level update failed: ' . $e->getMessage(), ['request' => $request->all()]);
        return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat ingin memperbarui Levels: ' . $e->getMessage()])->withInput();
    }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();

        try {
            $level = Level::findOrFail($id);
            $level->delete();

            DB::commit();

            Alert::success('success', 'Data Level Berhasil Dihapus !');
            return redirect()->route('admin.settings.index');

        } catch(Exception $e) {

            DB::rollBack();

            Log::error('Level Delete failed: ' . $e->getMessage());
            Alert::warning('Failed', 'Data tidak Berhasil Dihapus');
            return redirect()->back();
            
        } catch (QueryException $e) {

            Log::error('Level Delete failed: ' . $e->getMessage(), ['id' => $id]);
            Alert::warning('Failed', 'Data tidak Berhasil Dihapus.');
            return redirect()->back();
            
        } catch (Exception $e) {
        
            Log::error('Unexpected error: ' . $e->getMessage(), ['id' => $id]);
            Alert::warning('Failed', 'Terjadi kesalahan yang tidak terduga.');
            return redirect()->back();
        }
    }

    public function autoGenerate()
    {
        DB::beginTransaction();
    
        try {
            Level::truncate();
    
            $levels = [
                [
                    'name' => 'Sertifikat Level A',
                    'duration' => '3',
                    'benefit' => 'Mendapatkan Sertifikat Level A',
                    'condition' => 'Telah Bergabung di LMS A',
                ],
                [
                    'name' => 'Sertifikat Level B',
                    'duration' => '3',
                    'benefit' => 'Mendapatkan Sertifikat Level B',
                    'condition' => 'Telah Bergabung di LMS B',
                ],
                [
                    'name' => 'Sertifikat Level C',
                    'duration' => '3',
                    'benefit' => 'Mendapatkan Sertifikat Level C',
                    'condition' => 'Telah Bergabung di LMS C',
                ],
                [
                    'name' => 'Paket Bundling',
                    'duration' => '3',
                    'benefit' => 'Mendapatkan Akses Level A,B,C',
                    'condition' => 'Telah Bergabung di TLC',
                ],
            ];
    
            foreach ($levels as $levelData) {
                $level = Level::firstOrCreate(['name' => $levelData['name']], $levelData);
                Log::info('Data level dibuat atau ditemukan:', $level->toArray());
            }
    
            DB::commit();
    
            Alert::success('Success', 'Data Auto Generate berhasil dibuat');
            return redirect()->route('admin.settings.index')->with('success', 'Data berhasil di-generate.');
    
        } catch (Exception $th) {
            DB::rollBack();
            Log::error('Terjadi kesalahan saat Generate data: ' . $th->getMessage());
            Alert::success('Success', 'Data Auto Generate berhasil dibuat');
            return redirect()->back();
        }
    }
    
}
