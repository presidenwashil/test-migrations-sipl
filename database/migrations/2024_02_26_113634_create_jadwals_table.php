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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->integer('sesi');
            $table->string('waktu');
            $table->foreignId('ajaran_id')->constrained('ajarans');
            $table->foreignId('matakuliah_id')->constrained('matakuliahs');            
            $table->foreignId('kelompok_id')->constrained('kelompoks');
            $table->foreignId('ruangan_id')->constrained('ruangans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
