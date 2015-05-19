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
        $type=Event::where('event_type', 'LIKE', '%'.$type.'%')->get();
        var_dump(json_encode($type));
	}

    public function getEventByDate($date)
    {
        $date=Event::where('event_date', 'LIKE', '%'.$date.'%')->get();
        var_dump(json_encode($date));
    }

    public function getEventByTime($time)
    {
        $time=Event::where('event_time', 'LIKE', '%'.$time.'%')->get();
        var_dump(json_encode($time));
    }

    public function getEventByTitle($title)
    {
        $title=Event::where('event_title', 'LIKE', '%'.$title.'%')->get();
        var_dump(json_encode($title));
    }



}
