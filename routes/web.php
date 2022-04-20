<?php

use App\Http\Controllers\MembreController;


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

Route::get('/', 'App\Http\Controllers\front\homepageController@index')->name('pagedaccueil');
Route::get('/home', function () {
    return view('Front.index');
})->name('home');
Route::get('/home/connect', function () {
    return view('Front.index');
})->name('homeconnect');
Route::get('/cours', function () {
    return view('Front.cours');
})->name('cours');
Route::get('/projets', function () {
    return view('Front.projets');
})->name('projets');
Route::get('/inscriptionget', function () {
    return view('Front.inscription');
})->name('inscriptionget');
Route::get('/connexion', function () {
    return view('Front.connexion');
})->name('connexion');

Route::post('/home', [MembreController::class, 'store'])->name('home');
Route::post('/cours', [MembreController::class, 'store'])->name('cours');
Route::post('/projets', [MembreController::class, 'store'])->name('projets');
Route::post('/inscriptionget', [MembreController::class, 'store'])->name('inscription');
Route::post('/home/connect', [MembreController::class, 'connect'])->name('homeconnect');







/*
|--------------------------------------------------------------------------
| KNX tunisie
|--------------------------------------------------------------------------
*/
Route::get('/knxtunisie-com', function () {return view('knxtunisie.knxtunisie-com');})->name('knxtunisie-com');
Route::get('/knxtunisie-acceuil', function () {return view('knxtunisie.knxtunisie-acceuil');})->name('knxtunisie-acceuil');
Route::get('/knx', function () {return view('knxtunisie.knx');})->name('knx');
Route::get('/knxtunisie-logiciel', function () {return view('knxtunisie.knxtunisie-logiciel');})->name('knxtunisie-logiciel');
Route::get('/knxtunisie-doc', function () {return view('knxtunisie.knxtunisie-doc');})->name('knxtunisie-doc');
Route::get('/knxtunisie-formation', function () {return view('knxtunisie.knxtinisie-formation');})->name('knxtunisie-formation');
Route::get('/knxtunisie-actus', function () {return view('knxtunisie.knxtunisie-actus');})->name('knxtunisie-actus');
Route::get('/knxtunisie-contact', function () {return view('knxtunisie.knxtunisie-contact');})->name('knxtunisie-contact');
