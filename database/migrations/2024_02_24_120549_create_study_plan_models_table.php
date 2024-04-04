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
        Schema::create('study_plan_models', function (Blueprint $table) {
            $table->id();
            $table->varchar('studentname', 255);
            $table->varchar('course', 255);
            $table->varchar('grade', 255);
            $table->varchar('section', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_plan_models');
    }
};
