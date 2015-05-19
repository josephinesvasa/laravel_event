<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventArtistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('event_artists', function(Blueprint $table)
        {
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('artist_id');
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('artist_id')->references('id')->on('artists');
            //$table->rememberToken();
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
        Schema::drop('event_artists');
	}

}
