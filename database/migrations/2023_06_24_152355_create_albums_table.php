<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('spotify_id');
            $table->string('release_date');
            $table->string('tipo');
            $table->string('market');
            $table->string('images');
            $table->string('total_tracks');
            $table->string('uri');
            $table->string('genres');
            $table->string('label');
            $table->integer('popularity');
            $table->integer('productor_id');
            $table->integer('cant_disc');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('albums');
    }
}
