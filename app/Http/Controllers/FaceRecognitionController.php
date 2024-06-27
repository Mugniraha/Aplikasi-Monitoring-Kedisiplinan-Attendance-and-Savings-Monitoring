<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile_siswa;
use App\Models\Absensi;

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
    $request->validate([
        'detectedImage' => 'required|image',
        'label' => 'required',
    ]);

    $image = $request->file('detectedImage');
    $label = $request->input('label');

    $siswa = Profile_siswa::where('nama_siswa', $label)->first();

    if (!$siswa) {
        return response()->json(['error' => 'Siswa tidak ditemukan untuk label ini'], 404);
    }

    $waktu = now();
    $tanggal = $waktu->format('Y-m-d');
    $absensiBeforeNine = $siswa->absensi()->whereDate('tanggal', $tanggal)->whereTime('waktu', '<', '09:00:00')->exists();

    if ($waktu->format('H:i') < '09:00' && $absensiBeforeNine) {
        return response()->json(['error' => 'Sudah terdeteksi absensi sebelum jam 9 pagi hari ini'], 400);
    }

    $absensiAfterNine = $siswa->absensi()->whereDate('tanggal', $tanggal)->where('keterangan', ($waktu->format('H:i') < '09:00') ? 'Check in' : 'Check out')->exists();

    if ($waktu->format('H:i') >= '09:00' && $absensiAfterNine) {
        return response()->json(['error' => 'Sudah terdeteksi absensi setelah jam 9 pagi hari ini'], 400);
    }

    $imageName = $image->hashName();
    $path = $image->store('public/uploads');

    $keterangan = ($waktu->format('H:i') < '09:00') ? 'Check in' : 'Check out';

    $absensi = new Absensi([
        'waktu' => $waktu,
        'tanggal' => $tanggal,
        'bukti_absensi' => $imageName,
        'keterangan' => $keterangan,
    ]);

    $siswa->absensi()->save($absensi);

    $namaHari = $waktu->translatedFormat('l');

    return response()->json([
        'success' => true,
        'path' => $imageName,
        'tanggal' => $waktu->format('d'),
        'namaHari' => $namaHari,
    ]);
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
