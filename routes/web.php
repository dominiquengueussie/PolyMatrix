<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeClientController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryClientController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EvaluationCommercialController;
use App\Http\Controllers\EvaluationSuperviseurController;
use App\Http\Controllers\InterlocuteurController;
use App\Http\Controllers\ZoneCommercialeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/type_client',TypeClientController::class);
    Route::resource('/category_client',CategoryClientController::class);
    Route::resource('/zone_commerciale',ZoneCommercialeController::class);
    Route::resource('/interlocuteurs',InterlocuteurController::class);
    Route::resource('/clients',ClientsController::class);
    Route::get('/infos/client/map/{id}',[ClientsController::class, 'map'])->name('map');
    Route::resource('/evaluations_superviseurs',EvaluationSuperviseurController::class);
    Route::get('/statistiques_superviseurs',[EvaluationSuperviseurController::class, 'showAll'])->name('statistique');
    Route::get('/excel/export',[EvaluationSuperviseurController::class, 'exportExcel'])->name('exportExcel');
    Route::get('/statistiques/export',[EvaluationSuperviseurController::class, 'export'])->name('export');
    Route::resource('/evaluations_commercials',EvaluationCommercialController::class);
});
Route::resource('/agence', AgenceController::class);
Route::resource('/users', UserController::class);
Route::resource('/roles', RolesController::class);

require __DIR__ . '/auth.php';