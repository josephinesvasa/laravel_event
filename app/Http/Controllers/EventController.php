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
                'event_title', 'event_ticket_uri','event_popularity', 'venue_id','venue_name', 'venue_map', 'venue_map_image')
            ->orderBy('event_date', 'ASC')
            ->orderBy('event_time', 'ASC')
            ->get();

        foreach($ev as $event){
            $events=Array(
                'event_id'=>$event->id,
                'event_title'=>$event->event_title,
                'event_date'=>$event->event_date,
                'event_time'=>$event->event_time,
                'event_type'=>$event->event_type,
                'event_age_restriction'=>$event->event_age_restr,
                'event_tickets'=>$event->event_ticket_uri,
                'event_popularity'=>$event->event_popularity,
            );
            $events['venue'][]=Array('venue_id'=>$event->venue_id, 'venue_name'=>$event->venue_name, 'venue_map'=>$event->venue_map, 'venue_map_image'=>$event->venue_map_image);
            foreach($artists as $artist){
                if($artist->event_id==$event->id){
                    $events['artists'][]=Array(
                        'artist_id'=>$artist->id,
                        'artist_name'=>$artist->artist_name,
                        'artist_image'=>$artist->artist_image
                    );
                }
            }
                $all_events['event'][]=($events);


        }
        return response()->json($all_events);
    }

    public function getArtistsByEventId($id){
        $art=Artist::join('event_artists', 'artist_id','=', 'artists.id')
            ->join('events', 'event_id', '=', 'events.id')
            ->select('artists.id','artist_name', 'artist_image', 'event_id')
            ->where('event_id','=',$id)
            ->get();


        $artists=Array();

        foreach($art as $artist){
                $artists['artists'][]=Array(
                    'artist_id'=>$artist->id,
                    'artist_name'=>$artist->artist_name,
                    'artist_image'=>$artist->artist_image
                );
            }
        return response()->json($artists);
    }
    public function getVenueByEventID($id){
        $ven=Venue::join('events', 'venue_id','=', 'venues.id')
            ->select('events.id','venue_id','venue_name', 'venue_map', 'venue_map_image', 'venue_adress')
            ->where('events.id','=',$id)
            ->get();


        $venues=Array();

        foreach($ven as $venue){
            $venues['venue'][]=Array(
                'venue_id'=>$venue->venue_id,
                'venue_name'=>$venue->venue_name,
                'venue_adress'=>$venue->venue_adress,
                'venue_map'=>$venue->venue_map,
                'venue_map_image'=>$venue->venue_map_image

            );
        }
        return response()->json($venues);
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
