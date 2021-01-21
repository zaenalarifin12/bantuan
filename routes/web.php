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

Route::get('/', "AppController@index");

Route::resource("kriteria",     "KriteriaController");
Route::resource("subkriteria",  "SubKriteriaController");
Route::resource("alternatif",   "AlternatifController");
Route::resource("bobot",        "BobotController");

Route::get("/hasil",            "HasilController@index");
// Route::get("/");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
