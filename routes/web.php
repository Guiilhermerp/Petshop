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
    //$pet = App\Pet::first();
    //dd(pet->owner);
    $owner = App\Owner::first();
    // dd($owner, $owner->pets);
    return view('welcome');
});

Route::get('/index', 'PetsController@index');
Route::get('/pets', 'PetsController@index');
Route::get('/owner', 'OwnersController@owner');
Route::get('petsCreate', 'petsController@create');
Route::post('pets/store', 'petsController@store');
Route::get('pets/edit/{id}', 'petsController@edit');
Route::patch('pets/update/{id}', 'petsController@update');
Route::delete('pets/destroy/{id}', 'petsController@destroy');