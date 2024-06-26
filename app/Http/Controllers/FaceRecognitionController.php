<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaceRecognitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'deteksi';
        return view('guru.faceRecognition.index',compact('slug'));
    }

    public function getLabels()
    {
        $labels = [];

        // Ambil direktori labels dari penyimpanan publik/labeled_images
        $directories = Storage::disk('public')->directories('labeled_images');

        // Loop melalui setiap direktori dan format ulang label
        foreach ($directories as $directory) {
            // Format ulang label sesuai kebutuhan aplikasi Anda
            $label = basename($directory); // Mengambil nama direktori terakhir sebagai label
            $labels[] = $label;
        }

        return response()->json($labels);
    }

    public function uploadImage(Request $request)
    {
        $image = $request->file('detectedImage');
        $label = $request->input('label');
        $path = $image->storeAs('app/uploads', $image->getClientOriginalName());
        return response()->json(['success' => true, 'path' => $path]);
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
}
