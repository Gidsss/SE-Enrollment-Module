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
        Schema::create('bscs_grades', function (Blueprint $table) {
            $table->increments('ID'); // Auto-increment primary key
            $table->string('course_code', 20); 
            $table->string('student_id', 10); 
            $table->string('course_name', 255); 
            $table->string('pre_requisites', 255)->nullable(); 
            $table->integer('units')->nullable(); 
            $table->integer('grades')->nullable(); 
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
        Schema::dropIfExists('bscs_grades');
    }
};
