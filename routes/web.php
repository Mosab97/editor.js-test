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
    return view('book/create');
    return view('welcome');
});


Route::get('books',function (){
    return view('book/create');
});
Route::post('books','BookController@store')->name('books.store');
Route::get('books/{id}','BookController@show')->name('books.show');
