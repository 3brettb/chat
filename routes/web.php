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

Auth::routes();

Route::get('/home', function(){
    return redirect()->route('room.index');
})->name('home');

Route::get('/rooms', 'RoomController@index')->name('room.index');
Route::resource('/room', 'RoomController');

Route::post('/room/{room}/message', 'RoomController@message')->name('room.message');