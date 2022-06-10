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
        Schema::create('courp', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('resumer');
            $table->string('description',9000);
            $table->integer('nb');
            $table->date('dated');
            $table->time('heured');
            $table->date('datef');
            $table->time('heuref');
            $table->string('statut');
            $table->string('url_image');
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
        Schema::dropIfExists('courp');
    }
};
