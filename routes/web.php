<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courriels', function () {
    $courriels = App\Models\Courriel::all();
    return view('courriels.index',  ['courriels' => $courriels]);
});

Route::get('/courriels/{id}', function ($id) {
    $courriel = App\Models\Courriel::find($id);
    return view('courriels.show', ['courriel' => $courriel]);
});
