<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;



use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenueController extends Controller {

	public function index()
	{
		$Venue=Venue::all();

        var_dump(json_encode($Venue));
	}


	public function getVenueById($id)
	{
        $Venue=Venue::find($id);

            var_dump(json_encode($Venue));

	}
	public function getVenueByName($name)
	{
       $Venue_name=Venue::find($name);
       var_dump(json_encode($Venue_name));

		//echo 'hämtar venue per namn='.$name;
	}

	public function getVenueByCity($city)
	{
		echo 'hämtar alla venue per city='.$city;
	}


	public function getVenueByLatLng($latLng)
	{
		echo 'hämtar alla venue per latlng='.$latLng;
	}

    public function getVenueByAdress($adress)
    {
        echo 'hämtar alla venue per Adress='.$adress;
    }

}
