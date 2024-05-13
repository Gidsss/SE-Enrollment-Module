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
        Schema::create('program_alignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('degree_programs')->onDelete('cascade');
            $table->foreignId('aligned_program_id')->constrained('degree_programs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_alignments');
    }
};
