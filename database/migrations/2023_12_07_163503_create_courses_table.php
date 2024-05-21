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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('course_code', 20)->unique();
            $table->string('course_name', 255);
            $table->integer('units');
            $table->string('pre_requisites', 255);
            $table->integer('year_lvl');
            $table->integer('sem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
