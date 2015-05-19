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

	}


	public function getArtistByName($name)
	{
        $name=Artist::where('artist_name', 'LIKE', '%'.$name.'%')->get();
        var_dump(json_encode($name));
	}



}
