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
    return view('welcome');
});

Auth::routes();
Route::get('/logout','HomeController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/virtualclass','Backend\VirtualClassController@index')->name('virtualclass.index');
Route::get('/virtualclass/new','Backend\VirtualClassController@create')->name('virtualclass.new');
Route::post('/virtualclass/save','Backend\VirtualClassController@store')->name('virtualclass.save');
Route::get('/virtualclass/meetings','Backend\VirtualClassController@user_meetings')->name('virtualclass.meetings');
Route::get('/virtualclass/about_meetings','Backend\VirtualClassController@about_meeting')->name('virtualclass.about_meetings');

