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
        Schema::create('profile_siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nama_siswa', 100);
            $table->integer('nisn');
            $table->integer('nis');
            $table->date('tgl_lahir');
            $table->char('jenis_kelamin');
            $table->string('orangtua', 100);
            $table->text('foto');
            $table->string('no_telpon');
            $table->timestamps();
        });

        Schema::create('pengajuan_pengambilan_tabungan', function (Blueprint $table) {
            $table->id('id_pengambilan');
            $table->date('tgl');
            $table->float('nominal');
            $table->timestamps();
        });

        Schema::create('tabungan', function (Blueprint $table) {
            $table->id('id_tabungan');
            $table->float('nominal');
            $table->float('saldo');
            $table->date('tanggal');
            $table->timestamps();
        });

        Schema::create('kesalahan_input_tabungan', function (Blueprint $table) {
            $table->id('id_kesalahan');
            $table->date('tgl');
            $table->string('keterangan', 255);
            $table->timestamps();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('email', 100);
            $table->string('password', 16);
            $table->timestamps();
        });

        Schema::create('pengajuan_ketidakhadiran', function (Blueprint $table) {
            $table->id('id_ketidakhadiran');
            $table->date('tgl');
            $table->string('bukti_foto', 255);
            $table->timestamps();
        });

        Schema::create('absensi', function (Blueprint $table) {
            $table->id('id_absensi');
            $table->timestamp('waktu');
            $table->date('tanggal');
            $table->string('keterangan', 255);
            $table->timestamps();
        });

        Schema::create('wali_kelas', function (Blueprint $table) {
            $table->id('id_walikelas');
            $table->string('nama_guru', 100);
            $table->bigInteger('nip');
            $table->date('tgl_lahir');
            $table->char('jenis_kelamin');
            $table->string('alamat', 255);
            $table->string('foto', 255)->nullable();
            $table->string('no_telepon', 20)->nullable();
            $table->timestamps();
        });

        Schema::create('akun_siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('email', 100);
            $table->string('password', 16);
            $table->timestamps();
        });

        Schema::create('pengajuan_kode_akses', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->date('tgl');
            $table->timestamps();
        });

        Schema::create('kode_akses', function (Blueprint $table) {
            $table->id('id_akses');
            $table->string('kode_akses', 16);
            $table->timestamps();
        });

        Schema::create('profile_perusahaan', function (Blueprint $table) {
            $table->string('nama_sekolah', 100);
            $table->string('alamat_sekolah', 255);
            $table->string('logo_sekolah', 255);
            $table->timestamps();
        });

        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id('id_pengumuman');
            $table->text('caption_pengumuman');
            $table->timestamps();
        });

        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id('id_notifikasi');
            $table->string('isi_notifikasi', 255);
            $table->timestamps();
        });

        Schema::create('perubahan_biodata', function (Blueprint $table) {
            $table->id('id_perubahandata');
            $table->date('tgl');
            $table->string('bukti_foto', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_siswa');
        Schema::dropIfExists('pengajuan_pengambilan_tabungan');
        Schema::dropIfExists('tabungan');
        Schema::dropIfExists('kesalahan_input_tabungan');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('pengajuan_ketidakhadiran');
        Schema::dropIfExists('absensi');
        Schema::dropIfExists('wali_kelas');
        Schema::dropIfExists('akun_siswa');
        Schema::dropIfExists('pengajuan_kode_akses');
        Schema::dropIfExists('kode_akses');
        Schema::dropIfExists('profile_perusahaan');
        Schema::dropIfExists('pengumuman');
        Schema::dropIfExists('notifikasi');
        Schema::dropIfExists('perubahan_biodata');
    }
};
