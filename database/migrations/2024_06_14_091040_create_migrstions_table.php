<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pengajuan_pengambilan_tabungan', function (Blueprint $table) {
            $table->foreignId('id_tabungan')->constrained('tabungan','id_tabungan');
        });

        Schema::table('tabungan', function (Blueprint $table) {
            $table->foreignId('id_siswa')->constrained('profile_siswa','id_siswa');
            $table->foreignId('id_admin')->constrained('admin','id_admin');
        });

        Schema::table('kesalahan_input_tabungan', function (Blueprint $table) {
            $table->foreignId('id_tabungan')->constrained('tabungan','id_tabungan');
        });

        Schema::table('pengajuan_ketidakhadiran', function (Blueprint $table) {
            $table->foreignId('id_absensi')->constrained('absensi','id_absensi');
        });

        Schema::table('absensi', function (Blueprint $table) {
            $table->foreignId('id_siswa')->constrained('profile_siswa','id_siswa');
            $table->foreignId('id_admin')->constrained('admin','id_admin');
        });

        Schema::table('wali_kelas', function (Blueprint $table) {
            $table->foreignId('id_absensi')->constrained('absensi','id_absensi');
        });

        Schema::table('pengajuan_kode_akses', function (Blueprint $table) {
            $table->foreignId('id_siswa')->constrained('profile_siswa','id_siswa');
        });

        Schema::table('kode_akses', function (Blueprint $table) {
            $table->foreignId('id_siswa')->constrained('profile_siswa','id_siswa');
        });

        Schema::table('pengumuman', function (Blueprint $table) {
            $table->foreignId('id_admin')->constrained('admin','id_admin');
            $table->foreignId('id_siswa')->constrained('profile_siswa','id_siswa');
        });

        Schema::table('notifikasi', function (Blueprint $table) {
            $table->foreignId('id_siswa')->constrained('profile_siswa','id_siswa');
            $table->foreignId('id_admin')->constrained('admin','id_admin');
        });

        Schema::table('perubahan_biodata', function (Blueprint $table) {
            $table->foreignId('id_siswa')->constrained('profile_siswa','id_siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migrstions');
    }
};
