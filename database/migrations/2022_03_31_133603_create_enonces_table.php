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
        Schema::create('enonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enonce');

            $table->foreign('quiz_id')->on('quizzes');
            $table->unsignedBigInteger('quiz_id');
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
        Schema::dropIfExists('enonces');
    }
};
