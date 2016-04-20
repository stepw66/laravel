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




Route::get('/', [
    'as'    => 'home',
    'uses'  => 'HomeController@getIndex'
]);

Route::get('invension-image', function(){
    $Img = Image::make('assets/images/laravel.jpg')->resize(300, 300);
    return $Img->response();
});

Route::get('oauth', [
    'as'        => 'oauth.index',
    'uses'      => 'OauthController@getIndex'
]);

Route::get('todo', [
    'as'        => 'todo',
    'uses'      => 'TodoController@getIndex'
]);

Route::get('products', [
    'as'        => 'products',
    'uses'      => 'ProductController@getIndex'
]);

Route::get('hello', [
    'as'        => 'hello',
    'uses'      => 'HelloController@getIndex'
]);

Route::group([
        'as'        => 'post.',
        'prefix'    => 'post'
    ], function(){
        Route::get('/', [
            'as'        => 'index.get',
            'uses'      => 'PostController@getIndex'
        ]);

        Route::post('/', [
            'as'        => 'index.post',
            'uses'      => 'PostController@postIndex'
        ]);
});

Route::get('pusher', [
    'as'    => 'pusher.index.get',
    'uses'  => 'PusherController@getIndex'
]);

Route::post('pusher', [
    'as'    => 'pusher.index.post',
    'uses'  => 'PusherController@postIndex'
]);

Route::get('pusher/notification', [
    'as'    => 'pusher.notification.get',
    'uses'  => 'PusherController@getNotification'
]);

get('/bridge', function() {
    $pusher = App::make('pusher');

    $pusher->trigger( 'test-channel',
        'test-event',
        array('text' => 'Preparing the Pusher Laracon.eu workshop!'));

    return view('welcome');
});