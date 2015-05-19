<?php namespace App;

//use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Venue extends Model  {

    protected $table = 'venues';

    protected $fillable = ['venue_org_id', 'venue_name', 'venue_adress', 'venue_city','venue_latlng', 'venue_map', 'venue_map_image'];
}

