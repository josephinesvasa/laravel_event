<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VenueController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		echo 'hämtar alla venues';
	}


	public function getVenueById($id)
	{
		echo 'hämtar venue per id='.$id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getVenueByName($name)
	{
		echo 'hämtar venue per namn='.$name;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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
