<?php namespace App\Http\Controllers;

use App\Artist;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class ArtistController extends Controller {

	public function index()
	{
        $Artists=Artist::all();

       var_dump(json_encode($Artists));

    }

	public function getArtistById($id)
	{
        $Artists=Artist::find($id);
        var_dump(json_encode($Artists));
		//echo 'här visas artist per id='. $id;
	}


	public function getArtistByName($name)
	{
		echo 'här visas artist per namn='.$name;
	}



}
