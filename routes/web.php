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
Route::get('/home', function () {return view('Front.index');})->name('home');
Route::get('/home/connect', function () {return view('Front.index');})->name('homeconnect');
Route::get('/cours', function () {return view('Front.cours');})->name('cours');
Route::get('/projets', function () {return view('Front.projets');})->name('projets');
Route::get('/inscriptionget', function () {return view('Front.inscription');})->name('inscriptionget');
Route::get('/connexion', function () {return view('Front.connexion');})->name('connexion');

Route::post('/home', [MembreController::class,'store'])->name('home');
Route::post('/cours', [MembreController::class,'store'])->name('cours');
Route::post('/projets', [MembreController::class,'store'])->name('projets');
Route::post('/inscriptionget', [MembreController::class,'store'])->name('inscription');
Route::post('/home/connect', [MembreController::class,'connect'])->name('homeconnect');







/*
|--------------------------------------------------------------------------
| KNX tunisie
|--------------------------------------------------------------------------
*/
Route::get('/knxtunisiecom', function () {return view('Front.KnxTunisie.knxtunisiecom');})->name('knxtunisiecom');
Route::get('/knxtunisieacceuil', function () {return view('Front.KnxTunisie.knxtunisieacceuil');})->name('knxtunisieacceuil');
Route::get('/knx', function () {return view('Front.KnxTunisie.knx');})->name('knx');







