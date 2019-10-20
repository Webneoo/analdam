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


Route::get('/', [
    'as' => 'home',
    'uses' => 'Controller@home'
]);

Route::get('/shit-control', [
    'as' => 'shit_control_path',
    'uses' => 'Controller@shitControl'
]);

Route::get('/results', [
    'as' => 'results_path',
    'uses' => 'Controller@results'
]);
