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
            $table->integer('venue_id')->primary()->increment();
            $table->integer('venue_org_id');
            $table->string('venue_name');
            $table->text('venue_adress');
            $table->string('venue_city');
            $table->text('venue_latlng');
            $table->text('venue_map');
            $table->text('venue_map_image');
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
		//
	}

}
