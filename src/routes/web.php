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
