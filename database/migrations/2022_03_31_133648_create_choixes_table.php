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
        Schema::create('choixes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('choix');

            $table->foreign('enonce_id')->on('enonces');
            $table->unsignedBigInteger('enonce_id');
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
        Schema::dropIfExists('choixes');
    }
};
