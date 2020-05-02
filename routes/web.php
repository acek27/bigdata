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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hasilkuesioner', 'KuesionerController@hasilkuesioner')->name('hasil.kuesioner');
Route::get('/datakuesioner', 'KuesionerController@anyData')->name('kuesioner.data');
Route::post('simpanbidangindustri', 'KuesionerController@simpanbidangindustri')->name('simpanbidangindustri');
Route::post('simpankuesionerdasar', 'KuesionerController@simpankuesionerdasar')->name('simpankuesionerdasar');
Route::post('simpanbidangpeternakan', 'KuesionerController@simpanbidangpeternakan')->name('simpanbidangpeternakan');
Route::resource('kuesioner', 'KuesionerController');
Route::resource('homeAdmin', 'HomeadminController');
