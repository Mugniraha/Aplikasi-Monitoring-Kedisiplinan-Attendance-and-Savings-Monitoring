<?php

namespace App\Http\Controllers;

use App\Models\Profile_siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class tambahBiodataController extends Controller
{
    public function index()
    {
        $slug = "tambahBiodata";
        return view("admin..rekap.biodata.tambahBiodata", compact("slug"));
    }

    // public function index2()
    // {
    //     $siswa = Profile_siswa::all(); // Mengambil semua data siswa
    //     return view('admin.rekap.biodata.index', compact('siswa'));
    // }

    // Menyimpan data siswa
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nisn' => 'required|integer',
            'nis' => 'required|integer',
            'email' => 'required|string|max:100',
            'password' => 'nullable|string|max:255',
        ]);

        $tambahAkun = new Profile_siswa();
        $tambahAkun->fill($validatedData);
        $tambahAkun->password = Hash::make($validatedData['password']);

        $tambahAkun->save();

        return back()->with('success', 'Tambah Data Siswa Berhasil');
    }

    public function showAll()
    {
        $siswa = Profile_siswa::all();
        return view('admin..rekap.biodata.index', compact('siswa'));
    }

    // public function show($id)
    // {
    //     $siswa = Profile_siswa::findOrFail($id);
    //     return view('admin.rekap.biodata.index', compact('siswa'));
    // }

    // Menampilkan form untuk mengedit data siswa
    // public function edit($id)
    // {
    //     $siswa = Profile_siswa::findOrFail($id);
    //     $slug = "editBiodata";
    //     return view("admin..rekap.biodata.editBiodata", compact("siswa", "slug"));
    // }

    // Mengupdate data siswa
    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'nama_siswa' => 'required|string|max:100',
    //         'nisn' => 'required|integer',
    //         'nis' => 'required|integer',
    //         'email' => 'required|email',
    //         'password' => 'nullable|string|min:6',
    //     ]);

    //     $tambahAkun = Profile_siswa::findOrFail($id);
    //     $tambahAkun->fill($validatedData);

    //     // Pastikan password tidak null sebelum di-hash
    //     if ($request->filled('password')) {
    //         $tambahAkun->password = Hash::make($validatedData['password']);
    //     }

    //     // Simpan perubahan
    //     $tambahAkun->save();

    //     return back()->with('success', 'Data siswa berhasil diperbarui');
    // }
    // public function regisSiswaPost(Request $request)
    // {
    //     $tambahAkun = new Profile_siswa();
    //     $tambahAkun->nama_siswa = $request->nama;
    //     $tambahAkun->nis = $request->nis;
    //     $tambahAkun->nisn = $request->nisn;
    //     $tambahAkun->email = $request->email;
    //     $tambahAkun->password = $request->password;
    //     $tambahAkun->password = Hash::make($request->password);
    //     $tambahAkun->save();
    //     return back()->with('success', 'Register Berhasil');
    // }
}
