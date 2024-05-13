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
        Schema::create('study_plan_validations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned()->unique(); // Match the data type with `students` table
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->integer('year_level');
            $table->date('date_of_request');
            $table->string('status');
            $table->text('study_plan')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_plan_validations');
    }
};
