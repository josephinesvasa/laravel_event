<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Security\Core\User;




class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		Model::unguard();

		 $this->call('UserTableSeeder');
        $this->call('EventTableSeeder');
        $this->call('Event_ArtistTableSeeder');
        $this->call('VenueTableSeeder');
        $this->call('ArtistTableSeeder');
	}

}
