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
            $table->id('id'); // changed this back to id instead of shifting_id because of eloquent model default id
            $table->bigInteger('student_id')->unsigned()->unique(); // Match the data type with `students` table
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('new_degree_program');
            $table->text('study_plan')->nullable();
            $table->text('letter_of_intent')->nullable();
            $table->text('note_of_undertaking')->nullable();
            $table->text('shifting_form')->nullable();
            $table->string('status')->nullable();
            $table->date('date_of_request')->nullable();
            $table->boolean('is_finalized')->default(false);
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
