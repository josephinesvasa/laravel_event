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
       $Venue_name=Venue::where('venue_name', 'LIKE', '%'.$name.'%')->get();
       var_dump(json_encode($Venue_name));

		//echo 'hämtar venue per namn='.$name;
	}

	public function getVenueByCity($city)
	{
        $Venue_city=Venue::where('venue_city', 'LIKE', '%'.$city.'%')->get();
        var_dump(json_encode($Venue_city));
	}

    public function getVenueByAdress($adress)
    {
        $adress=Venue::where('venue_adress', 'LIKE', '%'.$adress.'%')->get();
        var_dump(json_encode($adress));
    }

}
