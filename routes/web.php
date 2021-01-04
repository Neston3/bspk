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

Auth::routes();

Route::get('/', 'ImageController@index')->name('home');

Route::get('/embroidering','ImageController@embroid_index');

Route::get('/fabric','ImageController@fabric_index');

Route::get('/office','ImageController@office_index');

Route::get('/tailoring','ImageController@tailor_index');

Route::get('/service/contact', 'ImageController@contact_us');

Route::post('/appointment/submit','AppointmentController@store');

Route::post('/subscribe/submit', 'AppointmentController@subscribe');

Route::get('/admin_index', 'AdminController@index');

Route::post('/upload/submit', 'AdminController@store');

Route::get('/delete/{image_id}','AdminController@destroy');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
