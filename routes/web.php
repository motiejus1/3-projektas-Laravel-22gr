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

Route::prefix('authors')->group(function() {

    //Index. /authors
    Route::get('', 'App\Http\Controllers\AuthorController@index')->name('author.index');
    //Create
    Route::get('create', 'App\Http\Controllers\AuthorController@create')->name('author.create');
    Route::post('store', 'App\Http\Controllers\AuthorController@store' )->name('author.store');
    // Edit form, id

    Route::get('edit/{author}', 'App\Http\Controllers\AuthorController@edit')->name('author.edit');

    Route::post('update/{author}', 'App\Http\Controllers\AuthorController@update')->name('author.update');

});