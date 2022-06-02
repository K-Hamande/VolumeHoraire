<?php

use App\Http\Controllers\EtablissementController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionUtilisateurController;
use App\Http\Controllers\VolumeHoraireController;

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
    return view('dashboard',compact('User'));
})->middleware(['auth'])->name('Accueil');

require __DIR__.'/auth.php';


// les differntes routes pour la gestion des utilisateurs

Route::get('User',[VolumeHoraireController::class ,'UserIndex'])->name('UserIndex');
Route::get('UserRegister',[VolumeHoraireController::class,'Create'])->name('CreateUser');
Route::post('Register',[VolumeHoraireController::class,'CreateUser'])->name('Register');



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
