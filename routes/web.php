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
    return view('Benvenuto');
});


Route::post('/register','App\Http\Controllers\RegisterController@register');
Route::get('/register','App\Http\Controllers\RegisterController@index');
Route::get('/register/username/{username}','App\Http\Controllers\RegisterController@checkusername');
Route::get('/register/email/{email}','App\Http\Controllers\RegisterController@checkemail');
Route::get('/home','App\Http\Controllers\HomeController@index');
Route::get('/inizia','App\Http\Controllers\IniziaController@index');
Route::post('/login','App\Http\Controllers\LoginController@checklogin');
Route::get('/login','App\Http\Controllers\LoginController@login');
Route::get('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/preferiti','App\Http\Controllers\PreferitiController@index');
Route::get('/inizia/series/{series}','App\Http\Controllers\FetchController@fetch_inizia');
Route::get('/lista','App\Http\Controllers\ListaController@index');
Route::get('/inizia/remove_saved/id/{id}','App\Http\Controllers\IniziaController@remove_saved');
Route::get('/inizia/remove_like/id/{id}','App\Http\Controllers\IniziaController@remove_like');
Route::get('/GetLista','App\Http\Controllers\ListaController@GetLista');
Route::get('/GetPreferiti','App\Http\Controllers\PreferitiController@GetPreferiti');
Route::get('/remove_saved/id/{id}','App\Http\Controllers\ListaController@remove_saved');
Route::get('/preferiti/remove_like/id/{id}','App\Http\Controllers\PreferitiController@remove_like');
Route::get('/load_home','App\Http\Controllers\HomeController@load_home');
Route::post('/add_saved','App\Http\Controllers\IniziaController@add_saved');
Route::post('/add_like','App\Http\Controllers\IniziaController@add_like');
Route::get('/load_home1','App\Http\Controllers\FetchController@load_home1');
Route::get('/recensioni','App\Http\Controllers\RecensioniController@index');
Route::post('/add_recensioni','App\Http\Controllers\RecensioniController@aggiungi_recensioni');
Route::get('/GetRecensioni','App\Http\Controllers\RecensioniController@GetRecensioni');
Route::get('/remove_recensioni/id/{id}','App\Http\Controllers\RecensioniController@remove_recensioni');

