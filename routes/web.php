<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeAdminController;
use App\Http\Controllers\rekapBiodataController;
use App\Http\Controllers\pengumumanController;

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('home', homeAdminController::class);
Route::resource('rekap',rekapBiodataController::class);
Route::resource('pengumuman',pengumumanController::class);

Route::get('/pengajuan', function(){
    return view('admin.rekap.pengajuan.index');
});
