<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    //return 'Hello world';
    
});*/
 
/*Route::get('games', function () {
    
    $data['games'] = ['test1', 'test2', 'test3'];
    $data['poster'] = ['test1', 'test2', 'test3'];
    
    return view('games', $data);
});*/


//Games 
Route::get('games', 'GamesController@index');

Route::get('games/create', 'GamesController@create'); 

Route::get('games/{id}', 'GamesController@show');

Route::post('games', 'GamesController@store');

Route::post('games/{game}/reviews', 'GameCommentController@store');

//Songs
Route::get('songs', 'SongsController@index');

Route::get('songs/create', 'SongsController@create'); 

Route::get('songs/{id}', 'SongsController@show');

Route::post('songs', 'SongsController@store');

Route::post('songs/{song}/comments', 'SongCommentController@store');



 




Route::get('boards', function () {
    return view('boards');
});




//User authentication and session
Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
 
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
