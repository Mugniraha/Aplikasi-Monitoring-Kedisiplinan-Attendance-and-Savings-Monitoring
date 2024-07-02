<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile_siswa;

class hadirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "hadir";
        return view("admin.rekap.biodata.hadir",compact("slug"));
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
    public function show(string $id_siswa)
    {
        $siswa = Profile_siswa::find($id_siswa);

        if (!$siswa) {
            abort(404); // Handle jika siswa tidak ditemukan
        }

        return view('admin.rekap.biodata.hadir', compact('siswa'));

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
