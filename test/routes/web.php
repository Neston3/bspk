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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/embroidering','ImageController@embroid_index');

Route::get('/fabric','ImageController@fabric_index');

Route::get('/office','ImageController@office_index');

Route::get('/tailoring','ImageController@tailor_index');

Route::get('/service/contact');

Route::get('/admin_index', function(){
    return view('admin_index');
});

Route::post('upload/submit','ImageController@store');
