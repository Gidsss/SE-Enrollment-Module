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
            $table->id();
            $table->bigInteger('student_id');
            $table->string('student_name', 255);
            $table->integer('year_level');
            $table->date('date_of_request');
            $table->string('status');
            $table->text('current_checklist')->nullable();
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