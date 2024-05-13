<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('degree_programs', function (Blueprint $table) {
            $table->id();
            $table->string('program_code', 10)->unique();
            $table->string('program_name', 255);
            $table->string('college', 255)->nullable(); // CET or CISTM for now
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degree_programs');
    }
};
