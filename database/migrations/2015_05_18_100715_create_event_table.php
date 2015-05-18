<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('events', function(Blueprint $table)
        {
            $table->integer('event_id')->primary()->increment();
            $table->integer('event_org_id');
            $table->dateTime('event_date');
            $table->dateTime('event_time');
            $table->string('event_type');
            $table->string('event_age_restr');
            $table->text('event_title');
            $table->text('event_ticket_uri');
            $table->float('event_popularity');
            //$table->foreign('venue_id')->references('venue_id')->on('venues');
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
        Schema::drop('events');
	}

}
