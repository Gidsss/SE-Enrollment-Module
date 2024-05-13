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
        Schema::create('shifting_requests', function (Blueprint $table) {
            $table->id('shifting_id');
            $table->bigInteger('student_id')->unsigned()->unique(); // Match the data type with `students` table
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('new_degree_program')->nullable();
            $table->text('study_plan')->nullable();
            $table->text('letter_of_intent');
            $table->text('note_of_undertaking');
            $table->text('shifting_form');
            $table->string('status');
            $table->date('date_of_request');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifting_requests');
    }
};
