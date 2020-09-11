<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hotel-rooms', 'HotelController@listRooms')->name('rooms.list');
Route::get('/hotel/{hotel}/room/{room}/reserve', 'RoomController@reservation')->name('rooms.reservation');

Route::middleware(['web'])->group(function () {
    Route::post('/hotel/{hotel}/room/{room}/reserve', 'RoomController@reserve')->name('rooms.reserve');
    Route::get('/hotel-rooms/reserves', 'RoomController@reserves')->name('rooms.reserves');
});

Route::middleware(['hotel-manager'])->group(function () {
    Route::get('/admin/hotels', 'HotelController@index')->name('admin.hotel');
    Route::get('/admin/hotels/create', 'HotelController@create')->name('admin.hotel.create');
    Route::get('/admin/hotels/edit/{hotel}', 'HotelController@edit')->name('admin.hotel.edit');
    Route::post('/admin/hotels/edit/{hotel}', 'HotelController@update')->name('admin.hotel.update');
    Route::get('/admin/hotels/{hotel}', 'HotelController@show')->name('admin.hotel.show');
    Route::post('/admin/hotels', 'HotelController@store')->name('admin.hotel.store');
    Route::delete('/admin/hotels/{hotel}', 'HotelController@destroy')->name('admin.hotel.destroy');

    Route::get('/admin/hotel/{hotel}/rooms', 'RoomController@index')->name('admin.hotel.room');
    Route::get('/admin/hotel/{hotel}/rooms/create', 'RoomController@create')->name('admin.hotel.room.create');
    Route::post('/admin/hotel/{hotel}/rooms', 'RoomController@store')->name('admin.hotel.room.store');
    Route::get('/admin/hotel/{hotel}/rooms/edit/{room}', 'RoomController@edit')->name('admin.hotel.room.edit');
    Route::post('/admin/hotel/{hotel}/rooms/edit/{room}', 'RoomController@update')->name('admin.hotel.room.update');
    Route::get('/admin/hotels/{hotel}/rooms/{room}', 'RoomController@show')->name('admin.hotel.room.show');
    Route::delete('/admin/hotels/{hotel}/rooms/{room}', 'RoomController@destroy')->name('admin.hotel.room.destroy');
});
