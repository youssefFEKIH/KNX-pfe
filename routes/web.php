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

/*
|--------------------------------------------------------------------------
Affichage des pages KNX Tunisie
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
mirage groupe get 
|--------------------------------------------------------------------------
*/
Route::get('/', [membreController::class, 'index3'])->name('pagedaccueil');/*--page acceuil--*/
Route::get('/home', [membreController::class, 'index'])->name('home');     /*--mirage groupe--*/
Route::get('/coursp',[CourController::class, 'coursp'])->name('coursp');
Route::get('/projets', [ProjetController::class, 'index2'])->name('projets');
Route::get('/deconnexion', [MembreController::class, 'deconnexion']);      /*--deconnexion home--*/
Route::get('/profil', [membreController::class, 'profil'])->name('profil');/*--page profil--*/
Route::get('/home/connect', function () {  return view('Front.index');})->name('homeconnect');
Route::get('/inscriptionget', function () {return view('Front.inscription');})->name('inscriptionget');




/*
|--------------------------------------------------------------------------
| Formateur tunisie
|--------------------------------------------------------------------------
*/
Route::get('/FormateurDashboard/courp', [CourController::class, 'courp'])->name('courp');/*--dashborf courP--*/
Route::get('/AdminDashboard/cour', [CourController::class, 'cour'])->name('AdminDashboard/cour');/*--dashborf cour en ligne--*/

Route::get('/Formateur', [CvController::class, 'index'])->name('Formateur');/*--dashborf formateur1 --*/
/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::get('/deconnexionAdmin', [AdminController::class, 'deconnexion']);
Route::get('/AdminDashboard', [MembreController::class, 'show'])->name('AdminDashboard');/*--  dashbord accueil formateur et membre  --*/
Route::get('/AdminDashboard/projet', [ProjetController::class, 'index'])->name('AdminDashboard/projet');/*--  dashbord projet  --*/
Route::get('/AdminDashboard/cv', [CvController::class, 'CvFormateur'])->name('AdminDashboard/cv');
Route::get('/AdminDashboard/KNX/', [nouveauteController::class, 'nouveaute'])->name('AdminDashboard/KNX'); /*--  dashbord nouveaute KNX  --*/
Route::get('/AdminDashboard/candidat', [CandidatController::class, 'candidat'])->name('AdminDashboard/candidat');
Route::get('/AdminDashboard/Message', [MessageController::class, 'message'])->name('/AdminDashboard/Message');
/* ----Ajouter----------*/
Route::post('/AdminDashboard/image',  [nouveauteController::class, 'store'])->name('AddimageKnx');
Route::post('/AdminDashboard/Formateur', [MembreController::class, 'addF'])->name('AddFormateur');
Route::post('/AdminDashboard/projet',  [ProjetController::class, 'create'])->name('AddProjet');/*--ajouter un projet--*/
Route::post('/AdminDashboard/Candidat',  [CandidatController::class, 'create'])->name('AddCV');
Route::post('/AdminDashboard/cour',  [CourController::class, 'create'])->name('AddCour');
Route::post('/Formateur/courp',  [CourController::class, 'ajouterCourp'])->name('AddCourp');/*--ajouter cour P--*/
Route::post('/AdminDashboard/nouv',  [nouvController::class, 'store'])->name('Addnouv');
Route::post('/AdminDashboard/Message',  [MessageController::class, 'create'])->name('AddMessage');

/* ----Supprimer----------*/
Route::post('/destroy/{id}/F', [MembreController::class, 'destroy'])->name('supprimerF');
Route::post('/destroy/{id}/P', [ProjetController::class, 'destroy'])->name('supprimerP');
Route::post('/destroy/{id}/I', [nouveauteController::class, 'destroy'])->name('supprimerI');
Route::post('/destroy/{id}/C', [CandidatController::class, 'destroy'])->name('supprimerC');
Route::post('/destroy/{id}/Cour', [CourController::class, 'destroy'])->name('supprimerCour');
Route::post('/destroy/{id}/Courp', [CourController::class, 'destroycourp'])->name('supprimerCourp');/*--supprimer cour P--*/
Route::post('/destroy/{id}/N', [nouvController::class, 'destroy'])->name('supprimerN');
Route::post('/destroy/{id}/M', [MessageController::class, 'destroy'])->name('supprimerM');

/* ----Modifier----------*/
Route::post('/destroy/{id}/terminer', [CourController::class, 'terminer'])->name('terminer');/*--smodifier statut cour P--*/
Route::post('/Formateur/{id}/Modifiercourp',  [CourController::class, 'modifierCourp'])->name('ModifierCourp');/*--modifier cour P--*/
Route::post('/profilC', [membreController::class, 'profilC'])->name('profilC');/*--modifier profil--*/
Route::post('/modifier/projet', [ProjetController::class, 'modifierprojet'])->name('modifierprojet');/*--modifier projet--*/
Route::post('/modifier/NouvKnx', [nouvController::class, 'modifierNouvKnx'])->name('modifierknxnouv');/*--modifier nouv KNX--*/





Route::post('/sendemail/send',  [EmailController::class,'send']);





Route::post('/AdminDashboard/cv', [CvController::class, 'create']);
Route::post('/AdminDashboard/Edu', [EduController::class, 'create']);
Route::post('/AdminDashboard/Exp', [ExpController::class, 'create']);
Route::post('/AdminDashboard/Crt', [CrtController::class, 'create']);
Route::post('/home', [MembreController::class, 'store'])->name('home');       /*--nouvelle membre--*/  
Route::post('/cours', [MembreController::class, 'store'])->name('cours');     /*--nouvelle membre--*/
Route::post('/projets', [MembreController::class, 'store'])->name('projets'); /*--nouvelle membre--*/
Route::post('/inscriptionget', [MembreController::class, 'store'])->name('inscription');/*--nouvelle membre--*/
Route::post('/home/connect', [MembreController::class, 'connect'])->name('homeconnect');/*--connexion--*/





Route::get('/contact', [EmailController::class, 'index']);