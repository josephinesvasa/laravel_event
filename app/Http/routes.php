<?php

//home route
Route::get('/','HomeController@index');
//artist route

Route::get('/artist', 'ArtistController@index');

Route::get('artist/id/{id}','ArtistController@getArtistById', function($id)
{
    return $id;
})->where('id', '[0-9]+');

Route::get('artist/name/{name}','ArtistController@getArtistByName', function($name)
{
    return $name;
})->where('name', '[A-Za-z]+');

//Event route
Route::get('/event', 'EventController@index');

Route::get('event/type/{type}','EventController@getEventByType', function($type)
{
    return $type;
});

Route::get('event/id/{id}','EventController@getEventById', function($id)
{
    return $id;
})->where('id', '[0-9]+');

Route::get('event/date/{date}','EventController@getEventByDate', function($date)
{
    return $date;
})->where('date', '[0-9]+');

Route::get('event/time/{time}','EventController@getEventByTime', function($time)
{
    return $time;
})->where('id', '[0-9]+');
Route::get('event/title/{title}','EventController@getEventByTitle', function($title)
{
    return $title;
});
Route::get('event/uri/{uri}','EventController@getEventByTicketUri', function($ticket_uri)
{
    return $ticket_uri;
});
//venue route

Route::get('/venue', 'VenueController@index');

Route::get('venue/id/{id}','VenueController@getVenueById', function($id)
{
    return $id;
})->where('id', '[0-9]+');

Route::get('venue/name/{name}','VenueController@getVenueByName', function($name)
{
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('venue/city/{city}','VenueController@getVenueByCity', function($city)
{
    return $city;
})->where('name', '[A-Za-z]+');

Route::get('venue/latlng/{latlng}','VenueController@getVenueByLatLng', function($latlng)
{
    return $latlng;
})->where('id', '[0-9]+');

Route::get('venue/adress/{adress}','VenueController@getVenueByAdress', function($adress)
{
    return $adress;
});



/*
Route::get('/', function()
{
    return View::make('index');
});
Route::get('users', 'UserController@index');
Route::group(array('prefix' => 'api/v1'), function()
{
    Route::get('photos', 'PhotoController');
    //Route::get('users', 'UserController');
    Route::get('categories', 'CategoryController');

});

Route::resource('files', 'ImagesController');
/*
// GET route
Route::get('login', function() {
    return View::make('login1');
});
//POST route
Route::post('login', 'AccountController@login');
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/