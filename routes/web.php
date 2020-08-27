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
/**
 * Show Task Dashboard
 */
Route::get('/', 'TaskController@showTask');

/**
 * Add new Task
 */

Route::post('/task', 'TaskController@postAddTask');

/**
 * Delete Task
 */
Route::delete('/task/{taskID}',[
    'as' =>'Delete',
    'uses' =>'TaskController@deleteTask',
]);
