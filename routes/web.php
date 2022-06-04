<?php

use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\CrtController;
use App\Http\Controllers\EduController;
use App\Http\Controllers\nouveauteController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\NouvController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EmailController;

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




Route::get('/', [membreController::class, 'index3'])->name('pagedaccueil');/*--page acceuil--*/
Route::get('/home', [membreController::class, 'index'])->name('home');     /*--mirage groupe--*/
Route::get('/coursp',[CourController::class, 'coursp'])->name('coursp');
Route::get('/projets', [ProjetController::class, 'index2'])->name('projets');
Route::get('/deconnexion', [MembreController::class, 'deconnexion']);      /*--deconnexion home--*/

Route::post('/home', [MembreController::class, 'store'])->name('home');       /*--nouvelle membre--*/  
Route::post('/cours', [MembreController::class, 'store'])->name('cours');     /*--nouvelle membre--*/
Route::post('/projets', [MembreController::class, 'store'])->name('projets'); /*--nouvelle membre--*/
Route::post('/inscriptionget', [MembreController::class, 'store'])->name('inscription');/*--nouvelle membre--*/
Route::post('/home/connect', [MembreController::class, 'connect'])->name('homeconnect');/*--connexion--*/


/*
|--------------------------------------------------------------------------
| KNX tunisie
|--------------------------------------------------------------------------
*/
Route::get('/knxtunisie-com', [nouveauteController::class, 'index'])->name('knxtunisie-com');
Route::get('/knxtunisie-acceuil', [nouveauteController::class, 'index2'])->name('knxtunisie-acceuil');
Route::get('/knx', [nouveauteController::class, 'index3'])->name('knx');
Route::get('/knxtunisie-logiciel', [nouveauteController::class, 'index4'])->name('knxtunisie-logiciel');
Route::get('/knxtunisie-doc', [nouveauteController::class, 'index5'])->name('knxtunisie-doc');
Route::get('/knxtunisie-formation', [nouveauteController::class, 'index6'])->name('knxtunisie-formation');
Route::get('/knxtunisie-actus', [nouveauteController::class, 'index7'])->name('knxtunisie-actus');
Route::get('/knxtunisie-contact', [nouveauteController::class, 'index8'])->name('knxtunisie-contact');


/*
|--------------------------------------------------------------------------
| Formateur tunisie
|--------------------------------------------------------------------------
*/
Route::get('/Formateur', [CvController::class, 'index'])->name('Formateur');


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::get('/deconnexionAdmin', [AdminController::class, 'deconnexion']);
Route::get('/AdminDashboard', [MembreController::class, 'show'])->name('AdminDashboard');
Route::get('/AdminDashboard/projet', [ProjetController::class, 'index'])->name('AdminDashboard/projet');
Route::get('/AdminDashboard/cv', [CvController::class, 'CvFormateur'])->name('AdminDashboard/cv');
Route::get('/AdminDashboard/KNX', [nouveauteController::class, 'nouveaute'])->name('AdminDashboard/KNX');
Route::get('/AdminDashboard/candidat', [CandidatController::class, 'candidat'])->name('AdminDashboard/candidat');
Route::get('/AdminDashboard/cour', [CourController::class, 'cour'])->name('AdminDashboard/cour');
Route::get('/FormateurDashboard/courp', [CourController::class, 'courp'])->name('courp');
/* ----Ajouter----------*/
Route::post('/AdminDashboard/image',  [nouveauteController::class, 'store'])->name('AddimageKnx');
Route::post('/AdminDashboard/Formateur', [MembreController::class, 'addF'])->name('AddFormateur');
Route::post('/AdminDashboard/projet',  [ProjetController::class, 'create'])->name('AddProjet');
Route::post('/AdminDashboard/Candidat',  [CandidatController::class, 'create'])->name('AddCV');
Route::post('/AdminDashboard/cour',  [CourController::class, 'create'])->name('AddCour');
Route::post('/Formateur/courp',  [CourController::class, 'ajouterCourp'])->name('AddCourp');
Route::post('/AdminDashboard/nouv',  [nouvController::class, 'store'])->name('Addnouv');
Route::post('/AdminDashboard/Message',  [MessageController::class, 'create'])->name('AddMessage');

/* ----Supprimer----------*/
Route::post('/destroy/{id}/F', [MembreController::class, 'destroy'])->name('supprimerF');
Route::post('/destroy/{id}/P', [ProjetController::class, 'destroy'])->name('supprimerP');
Route::post('/destroy/{id}/I', [nouveauteController::class, 'destroy'])->name('supprimerI');
Route::post('/destroy/{id}/C', [CandidatController::class, 'destroy'])->name('supprimerC');
Route::post('/destroy/{id}/Cour', [CourController::class, 'destroy'])->name('supprimerCour');
Route::post('/destroy/{id}/Courp', [CourController::class, 'destroycourp'])->name('supprimerCourp');
Route::post('/destroy/{id}/N', [nouvController::class, 'destroy'])->name('supprimerN');
Route::post('/destroy/{id}/M', [MessageController::class, 'destroy'])->name('supprimerM');

/* ----Modifier----------*/
Route::post('/destroy/{id}/terminer', [CourController::class, 'terminer'])->name('terminer');
Route::post('/Formateur/{id}/Modifiercourp',  [CourController::class, 'modifierCourp'])->name('ModifierCourp');
Route::post('/AdminDashboard/projet/update', [ProjetController::class, 'update'])->name('modifierP');



Route::get('/mise', [membreController::class, 'mise'])->name('mise');
Route::get('/profil', [membreController::class, 'profil'])->name('profil');
Route::get('/profilA', [membreController::class, 'profilA'])->name('profilA');
Route::get('/AdminDashboard/Message', [MessageController::class, 'message'])->name('/AdminDashboard/Message');
Route::get('/contact', [EmailController::class, 'index']);

Route::post('/sendemail/send',  [EmailController::class,'send']);
Route::post('/profilC', [membreController::class, 'profilC'])->name('profilC');




Route::post('/AdminDashboard/cv', [CvController::class, 'create']);
Route::post('/AdminDashboard/Edu', [EduController::class, 'create']);
Route::post('/AdminDashboard/Exp', [ExpController::class, 'create']);
Route::post('/AdminDashboard/Crt', [CrtController::class, 'create']);



Route::get('/home/connect', function () {  return view('Front.index');})->name('homeconnect');
Route::get('/inscriptionget', function () {return view('Front.inscription');})->name('inscriptionget');