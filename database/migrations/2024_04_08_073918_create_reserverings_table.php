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
        Schema::create('reserverings', function (Blueprint $table) {
            $table->id();
            $table->integer('persoon_id')->references('id')->on('persoons');
            $table->integer('openingstijd_id');
            $table->integer('tarief_id');
            $table->integer('baan_id')->references('id')->on('baans');
            $table->integer('pakketOptie_id')->nullable();
            $table->integer('reserveringStatus_id');
            $table->string('Reserveringsnummer');
            $table->date('Datum');
            $table->string('AantalUren');
            $table->time('BeginTijd');
            $table->time('EindTijd');
            $table->integer('AantalVolwassenen');
            $table->string('AantalKinderen')->nullable();
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
        Schema::dropIfExists('reserverings');
    }
};
