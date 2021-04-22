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

Route::prefix('')->namespace('App\Http\Controllers')->name('universidade-controller')->group(static function() {
Route::get('/',                             'UniversidadeController@index')->name('index');
Route::get('faculdade/create',              'UniversidadeController@create')->name('create');
Route::post('faculdade/',                            'UniversidadeController@store')->name('store');
Route::get('{id}/edit',                            'UniversidadeController@edit')->name('edit');
Route::put('/{faculdade}',                            'UniversidadeController@update')->name('update');
});




