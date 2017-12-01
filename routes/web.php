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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/responseheaderswithrequestparams', function () {
    return response(json_encode($_REQUEST), 200)
        	->header('Connection', 'close')
			->header('cache-control', 'must-revalidate')
			->header('Vary', 'Accept-Encoding')
			->header('content-type', 'application/json; charset=utf-8')
			->cookie('ce1','ketan',1);
});

Route::get('hello', 'Hello@index');
