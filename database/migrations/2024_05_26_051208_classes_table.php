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
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('subject_code', 20)->unique();
            $table->string('course_name', 255);
            $table->integer('units');
            $table->string('days_time');
            $table->string('room');
            $table->string('faculty')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
