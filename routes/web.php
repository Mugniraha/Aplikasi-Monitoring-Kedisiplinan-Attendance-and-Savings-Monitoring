<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeAdminController;
use App\Http\Controllers\rekapBiodataController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\loginController;

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
