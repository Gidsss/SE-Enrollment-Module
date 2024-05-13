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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned()->unique();
            $table->string('student_name', 255);
            $table->string('password', 255);
            $table->enum('student_type', ['Regular', 'Irregular']);
            $table->integer('year_level');
            $table->integer('student_block')->nullable();
            $table->string('degree_program');
            $table->boolean('enrolled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
