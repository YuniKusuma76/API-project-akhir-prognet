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
        Schema::create('anggotakks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kk_id');
            $table->unsignedBigInteger('penduduk_id');
            $table->unsignedBigInteger('hubungankk_id');
            $table->boolean('statusaktif');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotakks');
    }
};
