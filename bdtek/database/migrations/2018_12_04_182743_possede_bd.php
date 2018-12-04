<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PossedeBd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('possede_bd', function(Blueprint $table) {
            $table->foreign('id_Utilisateur')->references('id')->on('utilisateur')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_BD')->references('id')->on('BD')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->boolean('favori')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('possede_bd');
    }
}
