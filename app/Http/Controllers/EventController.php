<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		echo 'här dumpas alla event ut';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEventById($id)
	{
        echo 'hör hämtar du event by id='.$id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEventByType($type)
	{
		echo 'Här hämtar du event by type='.$type;
	}

    public function getEventByDate($date)
    {
        echo 'här hämtar du event by date='.$date;
    }

    public function getEventByTime($time)
    {
        echo 'här hämtar du event by time='.$time;
    }

    public function getEventByTitle($title)
    {
        echo 'här hämtar du event by title='.$title;
    }

    public function getEventByTicketUri($ticket_uri)
    {
        echo 'här hämtar du event by ticket_uri='.$ticket_uri;
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

}
