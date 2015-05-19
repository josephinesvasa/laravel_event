<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('venues', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('venue_org_id');
            $table->string('venue_name');
            $table->string('venue_adress');
            $table->string('venue_city');
            $table->text('venue_latlng');
            $table->text('venue_map');
            $table->text('venue_map_image');
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
        Schema::drop('venues');
	}

}
