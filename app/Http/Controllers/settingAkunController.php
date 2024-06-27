<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class settingAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = User::all();
        // $slug = "settingakun";
        return view("admin.setting.index",compact("settings"));
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
    public function edit($id)
    {
        $setting = User::find($id);
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah' => 'nullable|string|max:100',
            'alamat_sekolah' => 'nullable|string|max:255',
            'logo_sekolah' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'motto' => 'nullable|string|max:255',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
        ]);

        $setting = User::find($id);
        $setting->nama_sekolah = $request->nama_sekolah;
        $setting->alamat_sekolah = $request->alamat_sekolah;
        $setting->motto = $request->motto;
        $setting->visi = $request->visi;
        $setting->misi = $request->misi;

        if ($request->hasFile('logo_sekolah')) {
            if ($setting->logo_sekolah) {
                Storage::delete('public/images/' . $setting->logo_sekolah);
            }
            $logo = $request->file('logo_sekolah');
            $nama_logo = time() . '_' . $logo->getClientOriginalName();
            $logo->storeAs('public/images', $nama_logo);
            $setting->logo_sekolah = $nama_logo;
        }

        $setting->save();

        return redirect()->route('settingakun.index')->with('success', 'Data berhasil diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
