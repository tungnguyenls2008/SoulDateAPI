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

//Route::prefix('v1')->group(function (){
//    Route::get('/person/{person}/show','Views\v1\PersonController@show')->name('person.show');
////    Route::resource('/person', 'Views\v1\PersonController')
////        ->only(['show', 'destroy', 'update', 'store']);
////    Route::resource('/people', 'Views\v1\PersonController')
////        ->only('index');
//});
Route::get('/v1/person/{person}/show','Views\v1\PersonController@show')->name('person.show');
