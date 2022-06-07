<?php

use App\Http\Controllers\ActivitePedagogiqueController;
use App\Http\Controllers\Enseignant;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\GestionUtilisateurController;

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

// Route pour acceder a la page admin

Route::get('/', function () {
    $User = User::all();
    return view('pages.dashboard',compact('User'));
})->middleware(['auth'])->name('Accueil');

require __DIR__.'/auth.php';


// les differntes routes pour la gestion des utilisateurs

Route::get('User',[UserController::class ,'UserIndex'])->name('user');
Route::get('UserRegister',[UserController::class,'Create'])->name('createUser');
Route::post('Register',[UserController::class,'CreateUser'])->name('cegister');



// les differntes routes pour la creation des etablissement

                    // ============ UFR===============
Route::get('Etablissement',[EtablissementController::class ,'Etablissement'])->name('etablissement');
Route::get('Etablissement',[EtablissementController::class ,'Etablissement'])->name('etablissement');
// Route::get('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
Route::post('EtablissementRegister',[EtablissementController::class,'EtablissementRegister'])->name('EtablissementRegister');



                    // ============ Departement===============
Route::get('Departement',[EtablissementController::class ,'Departement'])->name('departement');
//Route::get('Etablissement',[EtablissementController::class ,'Etablissement'])->name('etablissement');
// Route::get('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
Route::post('DepartementRegister',[EtablissementController::class,'DepartementRegister'])->name('DepartementRegister');




                    // ============ Filière ===============
Route::get('Filiere',[EtablissementController::class ,'Filiere'])->name('filiere');
//Route::get('Etablissement',[EtablissementController::class ,'Etablissement'])->name('etablissement');
// Route::get('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
Route::post('FiliereRegister',[EtablissementController::class,'filiereRegister'])->name('filiereRegister');


                    // ============ UE ===============
Route::get('UE',[EtablissementController::class ,'UE'])->name('ue');
//Route::get('Etablissement',[EtablissementController::class ,'Etablissement'])->name('etablissement');
// Route::get('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
Route::post('ueRegister',[EtablissementController::class,'UeRegister'])->name('ueRegister');




                    // ============ ECUE ===============
Route::get('Ecue',[EtablissementController::class ,'Ecue'])->name('ecue');
//Route::get('Etablissement',[EtablissementController::class ,'Etablissement'])->name('etablissement');
// Route::get('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
Route::post('EcueRegister',[EtablissementController::class,'EcueRegister'])->name('EcueRegister');




                    // ============ Formations ===============
Route::get('Formation',[ActivitePedagogiqueController::class ,'Formation'])->name('formation');
Route::get('AjoutFormation',[ActivitePedagogiqueController::class ,'AjoutFormation'])->name('ajoutFormation');
// Route::get('UserRegister',[ActivitePedagogiqueController::class,'Create'])->name('CreateUser');
//Route::post('AjoutFormation',[ActivitePedagogiqueController::class,'AjoutFormation'])->name('');



                    // ============ Enseigants ===============
Route::get('Enseignant',[Enseignant::class ,'Enseignant'])->name('enseignant');
Route::get('AddEnseignant',[Enseignant::class ,'AddEnseignant'])->name('addEnseignant');
Route::get('ListeEnseignant',[Enseignant::class ,'ListeEnseignant'])->name('listeEnseignant');
Route::get('EnseignantActivite',[Enseignant::class ,'EnseignantActivite'])->name('enseignantActivite');
// Route::get('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
//Route::post('EcueRegister',[EtablissementController::class,'EcueRegister'])->name('EcueRegister');