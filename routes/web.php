<?php

use App\Http\Controllers\logoutController;
use App\Http\Controllers\settingAkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeAdminController;
use App\Http\Controllers\rekapBiodataController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\tabunganController;
use App\Http\Controllers\pengajuanController;
use App\Http\Controllers\pengeluaranController;
use App\Http\Controllers\tambahtabunganController;
use App\Http\Controllers\izinController;
use App\Http\Controllers\alfaController;
use App\Http\Controllers\hadirController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FaceRecognitionController;
use App\Http\Controllers\ImageRegistrationController;
use App\Http\Middleware\CorsMiddleware;
use App\Http\Controllers\tambahBiodataController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\guruAbsenController;
use App\Http\Controllers\detailAbsenPerSiswaController;


// Route::get('/', function () {
//     return view('index');
// });

// Route::resource('home', homeAdminController::class);
Route::resource('rekap', rekapBiodataController::class);
Route::resource('pengumuman', pengumumanController::class);
Route::get('/biodataLengkap', [rekapBiodataController::class, 'index']);
Route::get('/biodataLengkap/{id_siswa}', [rekapBiodataController::class, 'biodataLengkap'])->name('biodataLengkap.show');
Route::get('/detailBiodata/{id_siswa}', [rekapBiodataController::class, 'detailBiodata'])->name('detailBiodata.show');
Route::get('/editBiodata/{id_siswa}', [rekapBiodataController::class, 'editBiodata'])->name('editBiodata');
Route::patch('/updateBiodata/{id_siswa}', [rekapBiodataController::class, 'update'])->name('updateBiodata');
// Route::resource('login',loginController::class);
Route::get('/deteksi', [FaceRecognitionController::class, 'index']);
Route::get('/labels', [FaceRecognitionController::class, 'getLabels']);
Route::resource('/regist', ImageRegistrationController::class);
Route::get('/regist/{id}', [ImageRegistrationController::class, 'show'])->name('regist');
Route::resource('/detailAbsen',guruAbsenController::class);
Route::resource('/detailAbsenPerSiswa',detailAbsenPerSiswaController::class);
Route::get('/detailAbsenPerSiswa/{id}', [detailAbsenPerSiswaController::class, 'show'])->name('detailAbsenPerSiswa.show');
Route::get('/hadir/{id_siswa}', [hadirController::class, 'show'])->name('hadir');




Route::middleware(CorsMiddleware::class)->group(function () {
    Route::post('/create-folder', [ImageRegistrationController::class, 'createFolder']);
    Route::post('/save-images', [ImageRegistrationController::class, 'saveImages']);
    Route::post('/upload', [FaceRecognitionController::class, 'uploadImage']);
});


Route::get('/pengajuan', function () {
    return view('admin.rekap.pengajuan.index');
});
Route::resource('siswaAbsen',guruController::class);




Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [homeAdminController::class, 'index']);
    Route::delete('/logout', [logoutController::class, 'index'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::delete('/logout', [LogoutController::class, 'index'])->name('logout');
    // Tambahkan rute lain yang membutuhkan autentikasi di sini
});

















//route andin
Route::resource('tabungan', tabunganController::class);
Route::resource('pengajuan', pengajuanController::class);
Route::resource('pengeluaran', pengeluaranController::class);
Route::resource('tambahtabungan', tambahtabunganController::class);
Route::resource('izin', izinController::class);
Route::resource('alfa', alfaController::class);
Route::resource('hadir', hadirController::class);

// Route::resource('logout', logoutController::class);





// Rama
// Route::resource('tambahBiodata', tambahBiodataController::class);
// Route::post('tambahBiodata', [tambahBiodataController::class, 'store'])->name('tambahBiodata.store');
// Route::get('tambahBiodata/{id}/edit', [tambahBiodataController::class, 'edit'])->name('tambahBiodata.edit');
// Route::put('tambahBiodata/{id}', [tambahBiodataController::class, 'update'])->name('tambahBiodata.update');
// Route::get('/biodata', [tambahBiodataController::class, 'showAll'])->name('biodata.index');

// Route::get('/biodata', [tambahBiodataController::class, 'index2'])->name('biodata.index');
Route::resource('tambahBiodata', tambahBiodataController::class);
Route::post('tambahBiodata', [tambahBiodataController::class, 'store'])->name('tambahBiodata.store');
Route::get('tambahBiodata/{id}/edit', [tambahBiodataController::class, 'edit'])->name('tambahBiodata.edit');
Route::put('tambahBiodata/{id}', [tambahBiodataController::class, 'update'])->name('tambahBiodata.update');


Route::resource('settingakun', settingAkunController::class);
// Route::get('/settingakun/{id}/edit', [settingAkunController::class, 'edit'])->name('settingakun.edit');
// Route::put('/settingakun/{id}', [settingAkunController::class, 'update'])->name('settingakun.update');
