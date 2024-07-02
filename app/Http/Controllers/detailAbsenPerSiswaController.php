<?php

namespace App\Http\Controllers;
use App\Models\Profile_siswa;
use App\Models\Absensi;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class detailAbsenPerSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "detailAbsenPerSiswa";
        $siswa = Profile_siswa::all();
        return view('layout_guru.detailAbsenPerSiswa', compact('slug', 'siswa'));
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
        $totalHari = 30;
        $slug = "detailAbsenPerSiswa";
        $siswa = Profile_siswa::with('Absensi')->findOrFail($id);
        $hitungAbsensi= DB::table('absensi')
                            ->where('id_siswa',$id)
                            ->select('keterangan', DB::raw('count(*) as count'))
                            ->groupBy('keterangan')
                            ->get();
        $hadir = $hitungAbsensi->where('keterangan','Check in')->first()->count ?? 0;
        $persentaseKehadiran = ($hadir/$totalHari)*100;
        return view('layout_guru.detailAbsenPerSiswa', compact('slug', 'siswa','persentaseKehadiran'));
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
