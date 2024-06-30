<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DemandePlanificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DemandeInscriptionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NutritionistController;
use App\Http\Controllers\RepasController;
use App\Models\demandePlanification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome1');
});
Route::get('/countre', function () {
    return view('test');
});
Route::post('/redirects', [HomeController::class, 'index']);

Route::get('/dashboard/demandedeinscreption/create', function () {
    return view('dashboard.demandedeinscreption.create');
})->name('demand.index');
Auth::routes();
Route::resource('DemandeInscription', DemandeInscriptionController::class);
Route::post('dashboard/consulterdemande/create/{id}/admit', [DemandeInscriptionController::class, 'admit'])->name('demand.admit');
Route::resource('add', AdController::class);
Route::resource('admin', AdminController::class);
Route::middleware(['auth'])->group(function(){
    Route::resource('DemandePlanification', DemandePlanificationController::class);

Route::resource('cours', CoursController::class);

Route::resource('repas', RepasController::class);});
Route::post('/demande-inscription/{id}/accept', [DemandeInscriptionController::class, 'storee'])
    ->name('DemandeInscription.storee');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('coache', CoachController::class);

