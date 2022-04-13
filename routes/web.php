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
Route::get('/', 'App\Http\Controllers\front\homepageController@index')->name('pagedaccueil');
Route::get('/home', function () {
    return view('Front.index');
})->name('home');
Route::get('/cours', function () {
    return view('Front.cours');
})->name('cours');
Route::get('/projets', function () {
    return view('Front.projets');
})->name('projets');
Route::get('/knxtunisie-com', function () {
    return view('Front.knxtunisie-com');
})->name('knxtunisie-com');
Route::get('/knxtunisie-acceuil', function () {
    return view('Front.knxtunisie-acceuil');
})->name('knxtunisie-acceuil');
