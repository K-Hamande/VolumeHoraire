<?php

use App\Models\Ufr;
use App\Models\User;
use App\Http\Controllers\Enseignant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\GestionUtilisateurController;
use App\Http\Controllers\ActivitePedagogiqueController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
    $Etablissement = Ufr::all();
    //$Enseinant = User::all();
    //$Activite = Ufr::all();
    return view('pages.dashboard',compact('User','Etablissement'));
})->middleware(['auth'])->name('Accueil');

require __DIR__.'/auth.php';

 Route::middleware(['auth'])->group( function() {





// les differntes routes pour la gestion des utilisateurs

Route::get('User',[UserController::class ,'UserIndex'])->name('user');
Route::get('UserRegister',[UserController::class,'Create'])->name('createUser');
Route::get('DeletUser/{id}',[UserController::class,'DeletUser'])->name('deletUser');
Route::get('UpdatUser/{id}',[UserController::class,'UpdatUser'])->name('updatUser');
Route::post('URegister',[UserController::class,'CreateUser'])->name('Uregister');




// les differntes routes pour la creation des etablissement

                    // ============ UFR===============
Route::get('Etablissement',[EtablissementController::class ,'Etablissement'])->name('etablissement');
Route::get('EditEtablissement/{id}',[EtablissementController::class ,'EditEtablissement'])->name('editEtablissement');
Route::get('ListEtablissement',[EtablissementController::class ,'ListEtablissement'])->name('listEtablissement');
Route::get('DeletEtablissement/{id}',[EtablissementController::class,'DeletEtablissement'])->name('deletEtablissement');
Route::post('EtablissementRegister',[EtablissementController::class,'EtablissementRegister'])->name('EtablissementRegister');
Route::post('UpdatEtablissement/{id}',[EtablissementController::class,'UpdatEtablissement'])->name('updatEtablissement');



                    // ============ Departement===============
Route::get('Departement',[EtablissementController::class ,'Departement'])->name('departement');
Route::get('ListeDepartement',[EtablissementController::class ,'ListeDepartement'])->name('listeDepartement');
Route::get('EditDepartement/{id}',[EtablissementController::class,'EditDepartement'])->name('editDepartement');
Route::post('DepartementRegister',[EtablissementController::class,'DepartementRegister'])->name('DepartementRegister');
Route::post('UpdatDepartement/{id}',[EtablissementController::class,'UpdatDepartement'])->name('updatDepartement');
Route::get('DeletDepartement/{id}',[EtablissementController::class,'DeletDepartement'])->name('deletDepartement');




                    // ============ Filière ===============
Route::get('Filiere',[EtablissementController::class ,'Filiere'])->name('filiere');
Route::post('FiliereRegister',[EtablissementController::class,'filiereRegister'])->name('filiereRegister');
Route::get('ListFiliere',[EtablissementController::class ,'ListFiliere'])->name('listFiliere');
Route::get('EditFiliere/{id}',[EtablissementController::class,'EditFiliere'])->name('editFiliere');
Route::post('UpdatFiliere/{id}',[EtablissementController::class,'UpdatFiliere'])->name('updatFiliere');
Route::get('DeletFiliere/{id}',[EtablissementController::class,'DeletFiliere'])->name('deletFiliere');


                    // ============ UE ===============
Route::get('UE',[EtablissementController::class ,'UE'])->name('ue');
Route::get('ListUe',[EtablissementController::class ,'ListUe'])->name('listUe');
Route::post('ueRegister',[EtablissementController::class,'UeRegister'])->name('ueRegister');
Route::get('EditUe/{id}',[EtablissementController::class ,'EditUE'])->name('editUe');
Route::get('DeletUe/{id}',[EtablissementController::class,'DeletUE'])->name('deletUe');
Route::post('UpdatUe/{id}',[EtablissementController::class,'UpdatUe'])->name('updatUe');





                    // ============ ECUE ===============
Route::get('Ecue',[EtablissementController::class ,'Ecue'])->name('ecue');
Route::get('ListEcue',[EtablissementController::class ,'ListEcue'])->name('listEcue');
Route::post('EcueRegister',[EtablissementController::class,'EcueRegister'])->name('ecueRegister');
Route::get('EditEcue/{id}',[EtablissementController::class,'EditEcue'])->name('editEcue');
Route::post('UpdatEcue/{id}',[EtablissementController::class,'UpdatEcue'])->name('updatEcue');
Route::get('DeletEcue/{id}',[EtablissementController::class,'DeletEcue'])->name('deletEcue');


                    // ============ Année Academique ===============
Route::get('Annee',[EtablissementController::class ,'Annee'])->name('annee');
Route::get('ListAnnee',[EtablissementController::class ,'ListAnnee'])->name('listAnnee');
Route::post('AnneeRegister',[EtablissementController::class,'AnneeRegister'])->name('anneeRegister');
Route::get('EditAnnee/{id}',[EtablissementController::class,'EditAnnee'])->name('editAnnee');
Route::post('UpdatAnnee/{id}',[EtablissementController::class,'UpdatAnnee'])->name('updatAnnee');
Route::get('DeletAnnee/{id}',[EtablissementController::class,'DeletAnnee'])->name('deletAnnee');




                    // ============ Formations ===============
Route::get('Formation',[ActivitePedagogiqueController::class,'Formation'])->name('formation');
Route::get('ListeFormation',[ActivitePedagogiqueController::class ,'ListeFormation'])->name('listeFormation');
Route::post('FormationRegister',[ActivitePedagogiqueController::class ,'FormationRegister'])->name('formationRegister');
Route::get('EditFormation',[ActivitePedagogiqueController::class ,'EditFormation'])->name('editFormation');
//Route::post('',[ActivitePedagogiqueController::class,''])->name('');
//Route::post('',[ActivitePedagogiqueController::class,''])->name('');






                            // ============ Activité Pédagogique ===============

Route::get('NouvelleActivite',[ActivitePedagogiqueController::class ,'NouvelleActivite'])->name('nouvelleActivite');
Route::get('ActiviteProgrammer',[ActivitePedagogiqueController::class ,'ActiviteProgrammer'])->name('activiteProgrammer');
Route::get('ActiviteTerminer',[ActivitePedagogiqueController::class,'ActiviteTerminer'])->name('activiteTerminer');
Route::get('EditActivite',[ActivitePedagogiqueController::class,'EditActivite'])->name('editActivite');
Route::get('DeletActivite',[ActivitePedagogiqueController::class,'DeletActivite'])->name('deletActivite');
//Route::post('',[ActivitePedagogiqueController::class,''])->name('');
//Route::post('',[ActivitePedagogiqueController::class,''])->name('');




                    // ============ Enseigants ===============
Route::get('Permanent',[Enseignant::class ,'Permanent'])->name('permanent');
Route::get('Vacataire',[Enseignant::class ,'Vacataire'])->name('vacataire');
//Route::get('AddEnseignant',[Enseignant::class ,'AddEnseignant'])->name('addEnseignant');
Route::get('ListeEnseignant',[Enseignant::class ,'ListeEnseignant'])->name('listeEnseignant');
Route::get('EnseignantActivite',[Enseignant::class ,'EnseignantActivite'])->name('enseignantActivite');
// Route::post('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
//Route::post('EcueRegister',[EtablissementController::class,'EcueRegister'])->name('EcueRegister');






                    // ============ Attribution ===============
Route::get('Attribution',[ActivitePedagogiqueController::class ,'Attribution'])->name('attribution');
Route::get('ListeAttribution',[ActivitePedagogiqueController::class ,'ListeAttribution'])->name('listeAttribution');
Route::get('EditAttribution',[ActivitePedagogiqueController::class ,'EditAttribution'])->name('editAttribution');
Route::get('DeletAttribution',[ActivitePedagogiqueController::class ,'DeletAttribution'])->name('deletAttribution');
// Route::Post('UserRegister',[EtablissementController::class,'Create'])->name('CreateUser');
//Route::post('EcueRegister',[EtablissementController::class,'EcueRegister'])->name('EcueRegister');

 });