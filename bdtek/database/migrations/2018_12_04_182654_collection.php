<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Collection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_collection');
            $table->string('nom_auteur')->nullable();
            $table->text('resume_collection')->nullable();
            $table->string('categorie');
            $table->text('image_collection')->nullable();
            $table->text('commentaire')->nullable();
            $table->foreign('id_BD')->references('id')->on('BD')->onDelete('cascade');
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
        Schema::drop('collection');
    }
}
