<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile_siswa;
use Illuminate\Support\Facades\Storage;

class rekapBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $slug = "rekap";
    //     return view('admin.rekap.biodata.index',compact('slug'));
    // }
    public function index()
    {
        $siswa = Profile_siswa::all(); // Mengambil semua data siswa

        // pengelompokan sesuai angkatan
        $angkatan = [];
        foreach ($siswa as $data) {
            $angkatan[$data->angkatan][] = $data;
        }

        return view('admin.rekap.biodata.index', compact('siswa', 'angkatan'));
    }

    public function biodataLengkap($id_siswa)
    {
        $siswa = Profile_siswa::findOrFail($id_siswa); //
        return view('admin.rekap.biodata.biodataLengkap',compact('siswa'));
    }

    public function detailBiodata($id_siswa)
    {
        $siswa = Profile_siswa::findOrFail($id_siswa); //
        return view('admin.rekap.biodata.detailBiodata',compact('siswa'));
    }

    public function editBiodata($id_siswa)
    {
        $siswa = Profile_siswa::findOrFail($id_siswa);
        return view('admin.rekap.biodata.editBiodata', compact('siswa'));
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
    public function update(Request $request, $id_siswa)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nis' => 'required|string|max:255',
            'nisn' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'orangtua' => 'required|string|max:255',
            'no_telpon' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa = Profile_siswa::findOrFail($id_siswa);
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($siswa->foto) {
                Storage::delete('public/images/' . $siswa->foto);
            }

            // Unggah foto baru
            $foto = $request->file('foto');
            $nama_foto = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('public/images', $nama_foto);
            $siswa->foto = $nama_foto;
        }
        $siswa->update($request->except('foto'));

        return redirect()->route('detailBiodata.show', $siswa->id_siswa)->with('success', 'Biodata berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
