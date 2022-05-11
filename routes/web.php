<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/apropos',[PageController::class,'GETPAGEAPROPOS'])->name('GETPAGEAPROPOS');

Route::get('/equipes',[PageController::class,'GETPAGEEQUIPE'])->name('GETPAGEEQUIPE');

Route::get('/devis',[PageController::class,'GETPAGEDEVIS'])->name('GETPAGEDEVIS');

Route::get('/boutique',[PageController::class,'GETPAGEBOUTIQUE'])->name('GETPAGEBOUTIQUE');

Route::get('/immobilier',[PageController::class,'GETPAGEMOBILIER'])->name('GETPAGEMOBILIER');








