<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\ReparationController;
use App\Http\Controllers\TechnicienController;

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
    return view('welcome');
})->name('welcome');


Route::get('/vehicules', [VehiculeController::class, 'liste'])->name('liste_vehicule');
Route::get('/vehicules/form', [VehiculeController::class, 'form'])->name('form_vehicule');
Route::post('/vehicules/enregistrer', [VehiculeController::class, 'enregistrer'])->name('enregistrer_vehicule');
Route::get('/vehicules/modifier/{id}', [VehiculeController::class, 'modifier'])->name('modifier_vehicule');
Route::post('/vehicules/save/{id}', [VehiculeController::class, 'save'])->name('save_vehicule');
Route::get('/vehicules/supprimer/{id}', [VehiculeController::class, 'supprimer'])->name('supprimer_vehicule');



Route::get('/techniciens', [TechnicienController::class, 'liste'])->name('liste_technicien');
Route::get('/techniciens/form', [TechnicienController::class, 'form'])->name('form_technicien');
Route::post('/techniciens/enregistrer', [TechnicienController::class, 'enregistrer'])->name('enregistrer_technicien');
Route::get('/techniciens/modifier/{id}', [TechnicienController::class, 'modifier'])->name('modifier_technicien');
Route::post('/techniciens/save/{id}', [TechnicienController::class, 'save'])->name('save_technicien');
Route::get('/techniciens/supprimer/{id}', [TechnicienController::class, 'supprimer'])->name('supprimer_technicien');



Route::get('/reparations', [ReparationController::class, 'liste'])->name('liste_reparation');
Route::get('/reparations/form', [ReparationController::class, 'form'])->name('form_reparation');
Route::post('/reparations/enregistrer', [ReparationController::class, 'enregistrer'])->name('enregistrer_reparation');
Route::post('/reparations/save/{id}', [ReparationController::class, 'save'])->name('save_reparation');
Route::get('/reparations/supprimer/{id}', [ReparationController::class, 'supprimer'])->name('supprimer_reparation');
Route::get('/reparations/modifier/{id}', [ReparationController::class, 'modifier'])->name('modifier_reparation');
Route::post('/reparations/modifier/{id}', [ReparationController::class, 'modifier_reparation']);

