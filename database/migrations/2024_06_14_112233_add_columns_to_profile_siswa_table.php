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
            $table->string('email', 100)->after('no_telpon')->nullable();
            $table->string('password', 255)->after('foto')->nullable();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_siswa', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('');
        });
    }
};
