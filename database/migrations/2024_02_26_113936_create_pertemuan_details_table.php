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
        Schema::create('pertemuan_details', function (Blueprint $table) {
            $table->id();
            $table->text('materi');
            $table->text('catatan');
            $table->foreignId('pertemuan_id')->constrained('pertemuans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertemuan_details');
    }
};
