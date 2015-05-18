<?php namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class EventController extends Controller {

	public function index()
	{
        $Event=Event::all();

        var_dump(json_encode($Event));


	}


	public function getEventById($id)
	{
        $Event=Event::find($id);
        var_dump(json_encode($Event));
	}

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

}
