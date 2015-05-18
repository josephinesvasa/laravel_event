<?php namespace App;

//use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Artist extends Model  {

    protected $guarded = array('id', 'venue_name');
    protected $table = 'artists';



}



