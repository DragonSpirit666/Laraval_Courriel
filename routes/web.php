<?php

use App\Http\Controllers\CourrielController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

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

/**
 * Route pour afficher la vue de bienvenue.
 *
 * URL: /
 * Méthode: GET
 *
 * @return View
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Route pour afficher les courriels.
 *
 * URL: /courriels
 * Méthode: GET
 *
 * @return View
 */
Route::get('/courriels', [CourrielController::class, 'index']);

/**
 * Route pour afficher un courriel spécifique.
 *
 * URL: /courriels/{courriel}
 * Méthode: GET
 *
 * @param  int  $courriel
 * @return View
 */
Route::get('/courriels/{courriel}', [CourrielController::class, 'show'])->name('courriels.show');
