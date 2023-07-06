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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('mechanic_id');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('mechanic_id')->references('id')->on('mechanics');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
