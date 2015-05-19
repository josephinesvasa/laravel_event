<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('artists', function(Blueprint $table)
        {
            $table->integer('artist_id')->primary()->increment();
            $table->integer('artist_org_id');
            $table->text('artist_image');
            $table->string('artist_name', 160);
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
        Schema::drop('users');
	}

}
