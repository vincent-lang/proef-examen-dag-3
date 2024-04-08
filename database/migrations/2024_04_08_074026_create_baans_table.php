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

        //* this makes the table for baans
        Schema::create('baans', function (Blueprint $table) {
            $table->id();
            $table->integer('Nummer');
            $table->boolean('HeeftHek');
            $table->boolean('IsActief');
            $table->string('Opmerkingen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baans');
    }
};
