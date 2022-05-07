<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('image')->nullable();
            $table->string('adresse');
            $table->string('mail');
            $table->integer('numero');
            $table->string('fb');
            $table->string('linkedin');
            $table->string('description');
            $table->string('titre-experience');
            $table->string('desc-experience');
            $table->string('lieu-experience');
            $table->string('date-experience');
            $table->string('titre-education');
            $table->string('desc-education');
            $table->string('lieu-educatin');
            $table->string('date-education');
            $table->string('competence');
            $table->string('interet');
            $table->string('certif');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv');
    }
};
