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


// Route::get('/', function () {
//     return view('index');
// });

Route::resource('home', homeAdminController::class);
Route::resource('rekap',rekapBiodataController::class);
Route::resource('pengumuman',pengumumanController::class);
Route::get('biodataLengkap',[rekapBiodataController::class,'biodataLengkap']);
Route::resource('login',loginController::class);

Route::get('/pengajuan', function(){
    return view('admin.rekap.pengajuan.index');
});

























//route andin
Route::resource('tabungan', tabunganController::class);
Route::resource('settingakun', settingAkunController::class);
Route::resource('pengajuan', pengajuanController::class);
Route::resource('pengeluaran', pengeluaranController::class);
Route::resource('tambahtabungan', tambahtabunganController::class);
Route::resource('izin', izinController::class);
Route::resource('alfa', alfaController::class);
Route::resource('hadir', hadirController::class);
Route::resource('logout', logoutController::class);
