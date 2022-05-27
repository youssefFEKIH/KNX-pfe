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
        Schema::create('membres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('mail')->nullable();
            $table->string('mot_de_passe')->nullable();
            $table->string('type')->default('M')->nullable();

            $table->integer('tel')->nullable();
            $table->string('url_image')->nullable();
            $table->string('diplome')->nullable();
            $table->string('description')->nullable();
            $table->string('adresse')->nullable();
            $table->string('date_de_naissance')->nullable();
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
        Schema::dropIfExists('membres');
    }
};
