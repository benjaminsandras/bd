<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BD', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('nom_auteur')->nullable();
            $table->text('resume')->nullable();
            $table->string('tome')->nullable();
            $table->text('image')->nullable();
            $table->text('commentaire')->nullable();
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
        Schema::drop('BD');
    }
}
