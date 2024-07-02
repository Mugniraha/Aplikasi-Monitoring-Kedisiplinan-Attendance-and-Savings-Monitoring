<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Profile_siswa;

class ImageRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "regist";
        $siswa = Profile_siswa::all();
        return view("guru.faceRecognition.regist",compact("slug","siswa"));
    }

    public function createFolder(Request $request)
    {
        $folderName = $request->input('folderName');

        try {
            // Log request data if needed
            Log::info('Request to create folder: ' . $folderName);

            // Logic to create folder in 'storage/app/public/labeled_images'
            $folderPath = storage_path('app/public/labeled_images/' . $folderName);
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); // Buat direktori jika belum ada
                Log::info('Folder created successfully: ' . $folderName);
                return response()->json(['message' => 'Folder berhasil dibuat'], 200);
            } else {
                Log::error('Folder already exists: ' . $folderName);
                return response()->json(['message' => 'Folder sudah ada'], 400);
            }

        } catch (\Exception $e) {
            Log::error('Failed to create folder: ' . $folderName . ' - ' . $e->getMessage());
            return response()->json(['message' => 'Gagal membuat folder'], 500);
        }
    }


    public function saveImages(Request $request)
    {
        $folderName = $request->query('folderName');
        $partNumber = $request->input('partNumber');
        $totalParts = $request->input('totalParts');

        // Logging the inputs for debugging
        Log::info("Saving images to folder: {$folderName}, part number: {$partNumber}, total parts: {$totalParts}");

        // Validate the request parameters
        if (!$folderName || !is_numeric($partNumber) || !is_numeric($totalParts)) {
            Log::error('Invalid request parameters.', [
                'folderName' => $folderName,
                'partNumber' => $partNumber,
                'totalParts' => $totalParts
            ]);
            return response()->json(['error' => 'Invalid request parameters.'], 400);
        }

        // Define the folder path
        $folderPath = "app/public/labeled_images/{$folderName}";

        // Check if the directory exists, if not, create it
        if (!Storage::disk('public')->exists($folderPath)) {
            Storage::disk('public')->makeDirectory($folderPath);
            Log::info("Directory created: {$folderPath}");
        }

        // Get the uploaded images
        $images = $request->file('image');

        // Check if images are received
        if (!$images) {
            Log::error('No images received.');
            return response()->json(['error' => 'No images received.'], 400);
        }

        // Save each image
        foreach ($images as $index => $image) {
            $imageName = ($partNumber * count($images)) + $index + 1 . '.jpg';
            Storage::disk('public')->putFileAs($folderPath, $image, $imageName);
            Log::info("Image saved: {$imageName} to folder: {$folderPath}");
        }

        return response()->json(['message' => 'Images saved successfully.'], 200);
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
        $datasiswa = Profile_siswa::findOrFail($id);
        return view('guru.faceRecognition.regist', ['datasiswa' => $datasiswa]);
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
