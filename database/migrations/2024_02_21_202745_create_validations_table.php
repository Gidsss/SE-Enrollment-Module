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
        Schema::create('validations', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('studentid', 10)->nullable();
            $table->string('student_name', 255)->nullable();
            $table->integer('yearlvl')->nullable();
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
