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

//Masster Layout with Boostrap 4//
Route::view('index','blog.index');
Route::view('world','blog.world');
Route::view('us','blog.world');
Route::view('technology','blog.technology');

//Get username and Password from Database laravel_hao and table users//
Route::get('/view','UserController@getView');