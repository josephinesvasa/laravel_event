<?php

//home route
Route::get('/','HomeController@index');
//artist route

Route::get('/artist', 'ArtistController@index');

Route::get('artist/id/{id}','ArtistController@getArtistById', function($id)
{
    return $id;
})->where('id', '[0-9]+');

Route::get('/artist/name/{name}', 'ArtistController@getArtistByName');

//Event route
Route::get('/event', 'EventController@index');

Route::get('event/id/{id}','EventController@getEventById', function($id)
{
    return $id;
})->where('id', '[0-9]+');

Route::get('event/type/{type}','EventController@getEventByType');

Route::get('event/date/{date}','EventController@getEventByDate');

Route::get('event/time/{time}','EventController@getEventByTime');

Route::get('event/title/{title}','EventController@getEventByTitle');

//venue route

Route::get('/venue', 'VenueController@index');

Route::get('venue/id/{id}','VenueController@getVenueById', function($id)
{
    return $id;
})->where('id', '[0-9]+');

Route::get('venue/name/{name}','VenueController@getVenueByName');

Route::get('venue/city/{city}','VenueController@getVenueByCity');

Route::get('venue/adress/{adress}','VenueController@getVenueByAdress');

