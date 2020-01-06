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

Route::get('/', function (){
    return redirect('admin');
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('users')->group(function (){
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/create', 'UserController@store')->name('users.store');
        Route::get('/{id}/edit','UserController@edit')->name('users.edit');
        Route::post('/{id}/update','UserController@update')->name('users.update');
        Route::get('/{id}/delete','UserController@destroy')->name('users.destroy');
        Route::get('/{id}/restore','UserController@restore')->name('users.restore');
    });
});
