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
$api = app('Dingo\Api\Routing\Router');
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

$api->version('v1',function ($api){
    $api->get('hi',function (){
       return 'hi-v';
    });
});

Route::get('v1',function (){
    Mail::send('mailsend', [], function($message)
    {
        $message->to('mh.bscs@gmail.com');
    });
});
