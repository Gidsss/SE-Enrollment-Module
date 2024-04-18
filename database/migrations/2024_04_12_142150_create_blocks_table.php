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
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('BlockId'); // Auto-increment primary key
            $table->string('Block', 255);
            $table->integer('UnitId')->unsigned();
            $table->integer('YearStanding');
            $table->integer('Slots');
            $table->integer('Enlisted');
            $table->integer('Demand');
            $table->text('Remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
