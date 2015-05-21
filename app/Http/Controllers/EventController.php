<?php namespace App\Http\Controllers;

use App\Artist;
use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Venue;
use Illuminate\Http\Request;

class EventController extends Controller {

	public function index()
	{
        $Event=Event::all();

        var_dump(json_encode($Event));

	}

    public function getAll(){

        $art=Artist::join('event_artists', 'artist_id','=', 'artists.id')
            ->join('events', 'event_id', '=', 'events.id')
            ->select('artists.id','artist_name', 'artist_image', 'event_id')
            ->get();

        $artistsID=Array();
        $artists=Array();

        foreach($art as $artist){

            $artistsID[]=$artist->id;
            $artists[$artist->id]=$artist;

        }

        $ev=Event::join('venues', 'venue_id', '=', 'venues.id')
            ->select('events.id', 'event_date', 'event_time', 'event_type', 'event_age_restr',
                'event_title', 'event_ticket_uri','event_popularity', 'venue_id','venue_name')
            ->get();

        foreach($ev as $event){
            $events=Array('event_id'=>$event->id, 'event_title'=>$event->event_title);

            foreach($artists as $artist){
                if($artist->event_id==$event->id){
                    $events['artists'][]=Array('artist_name'=>$artist->artist_name);

                }
            }
                print_r(json_encode($events, JSON_PRETTY_PRINT));

        }

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
