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
        Schema::create('add_drop_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned()->unique(); // Match the data type with `students` table
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->date('date_of_request');
            $table->string('status');
            $table->text('study_plan')->nullable();
            $table->text('add_drop_form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_drop_requests');
    }
};
