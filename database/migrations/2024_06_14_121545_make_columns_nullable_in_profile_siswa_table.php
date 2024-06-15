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
        Schema::table('profile_siswa', function (Blueprint $table) {
            $table->date('tgl_lahir')->nullable()->change();
            $table->char('jenis_kelamin')->nullable()->change();
            $table->string('orangtua', 100)->nullable()->change();
            $table->text('foto')->nullable()->change();
            $table->string('no_telpon')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_siswa', function (Blueprint $table) {
            //
        });
    }
};
