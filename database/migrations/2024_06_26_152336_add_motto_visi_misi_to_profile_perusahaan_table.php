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
        Schema::table('profile_perusahaan', function (Blueprint $table) {
            $table->string('motto', 255)->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('nama_sekolah', 100)->nullable()->change();
            $table->string('alamat_sekolah', 255)->nullable()->change();
            $table->string('logo_sekolah', 255)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_perusahaan', function (Blueprint $table) {
            $table->dropColumn(['motto', 'visi', 'misi']);
            $table->string('nama_sekolah', 100)->nullable(false)->change();
            $table->string('alamat_sekolah', 255)->nullable(false)->change();
            $table->string('logo_sekolah', 255)->nullable(false)->change();
        });
    }
};
