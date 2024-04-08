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
        //* this makes the table for type_persoons
        Schema::create('type_persoons', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
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
        Schema::dropIfExists('type_persoons');
    }
};
