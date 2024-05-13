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
        Schema::create('temporary_validations', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->bigInteger('student_id')->unsigned()->unique(); // Match the data type with `students` table
            $table->foreign('student_id')->references('student_id')->on('students'); // Removed onDelete('cascade') to prevent accidental deletion
            $table->date('daterequest')->nullable();
            $table->string('status', 50)->nullable();
            $table->binary('validation_pdfs')->nullable();
            $table->string('studentprograms', 50)->default('BS Computer Science');
            $table->text('study_plan_course_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
