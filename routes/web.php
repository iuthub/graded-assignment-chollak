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

Route::get('/', [
    'uses' => 'TaskController@index',
    'as' => 'taskIndex'
]);

Route::post('/create', [
    'uses' => 'TaskController@create',
    'as' => 'taskCreate'
]);
Route::get('/edit/{id}', [
    'uses' => 'TaskController@edit',
    'as' => 'taskEdit'
]);
Route::get('/delete/{id}', [
    'uses' => 'TaskController@delete',
    'as' => 'taskDelete'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
