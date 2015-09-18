<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', function () {
    return view('welcome');
});

Route::get('invension-image', function(){
    $Img = Image::make('assets/images/laravel.jpg')->resize(300, 300);
    return $Img->response();
});

Route::get('oauth', [
    'as'        => 'oauth.index',
    'uses'      => 'OauthController@getIndex'
]);