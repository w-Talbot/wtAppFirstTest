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
    return view('welcome');
 });

Route::get('/pageOne', function () {
    return '<h1>This is test page one </h1>';
});

Route::get('/pageTwo', function () {
    return '<h1>This is test page one </h1>';
  });

Route::get('/math', function () {
  return view('pages.math');
});

Route::get('/users/{id}', function ($id) {
    return 'this is user '.$id; 
  });


