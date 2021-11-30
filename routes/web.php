<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    /*\Illuminate\Support\Facades\Mail::raw('hello world!',function ($message) {
        $message
            ->from('admin@firstsailproject.com')
            ->to('admin@example.com')
            ->subject('test email');
    });*/
    \Illuminate\Support\Facades\Mail::to('foo@admin.com')->send(new \App\Mail\Goodbye());
    return view('welcome');
});

Route::get('/getUsers', function () {
    //$response = \Illuminate\Support\Facades\Http::get('http://localhost:8081/users');
    $response = $response = \Illuminate\Support\Facades\Http::get('http://localhost:8081/users');
    //$client = new \GuzzleHttp\Client();
    //$response = $client->get('http://localhost:8081/users');

    return $response->json();
});
