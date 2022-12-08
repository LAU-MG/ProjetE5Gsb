<?php

use App\Http\Controllers\ComposantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentController;
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
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/listerMedicament', [MedicamentController::class, 'listerMedicament']);
Route::post('/postAfficherMedicament/{lib_famille}',
    [
        'uses'=>'App\Http\Controllers\MedicamentController@postAfficherMedicament',
        'as'=>'postAfficherMedicament'
    ]);
Route::get('/listerMedicamentFamille', [MedicamentController::class, 'listerFamMedicaments']);

Route::get('/ModifComposant/{id}', [MedicamentController::class,'listerCompoMedicaments']);
Route::post('/postAfficherComposant/{id_composant}',
    [
        'uses'=>'App\Http\Controllers\ComposantController@postAfficherComposant',
        'as'=>'postAfficherComposant'
    ]);

Route::get('/formModificationComposant', [ComposantController::class,'postAfficherComposant']);

Route::get('ajouterComposant', [ComposantController::class,'ajoutComposant']);

Route::post('/postAjoutComposant/{id}',
    [
        'uses'=>'App\Http\Controllers\ComposantController@postAjoutComposant',
        'as'=>'postAjoutComposant'
    ]);

