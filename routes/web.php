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

Route::get('/users', 'UserController@index')->name('users.index');


Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('users')->group(function (){
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/trash', 'UserController@getTrash')->name('users.trash');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/create', 'UserController@store')->name('users.store');
        Route::get('/{id}/edit','UserController@edit')->name('users.edit');
        Route::post('/{id}/update','UserController@update')->name('users.update');
        Route::get('/{id}/delete','UserController@destroy')->name('users.destroy');
        Route::get('/{id}/restore','UserController@restore')->name('users.restore');
        Route::get('/{id}/forceDelete','UserController@forceDelete')->name('users.forceDelete');
    });
    Route::prefix('libraries')->group(function () {
        Route::get('/','LibraryController@index')->name('libraries.index');
        Route::get('/create','LibraryController@create')->name('libraries.create');
        Route::post('/create','LibraryController@store')->name('libraries.store');
        Route::get('/{id}/edit','LibraryController@edit')->name('libraries.edit');
        Route::post('/{id}/update','LibraryController@update')->name('libraries.update');
        Route::get('/{id}/delete','LibraryController@destroy')->name('libraries.destroy');
    });
    Route::prefix('books')->group(function () {
        Route::get('/','BookController@index')->name('books.index');
    });
});
