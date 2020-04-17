<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::group([
	'prefix'=>'',
	'middleware' => ['auth']
], function(){
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
});

Auth::routes();
