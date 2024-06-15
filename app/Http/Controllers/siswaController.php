<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile_siswa;

class Profile_siswaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $siswa = Profile_siswa::all(); // Mengambil semua data siswa
    //     return view('admin.rekap.biodata.index', compact('siswa'));
    // }

    // public function show($id)
    // {
    //     $siswa = Profile_siswa::findOrFail($id);
    //     return view('admin.rekap.biodata.show', compact('siswa'));
    // }

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
    // public function show(string $id)
    // {
    //     //
    // }

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
