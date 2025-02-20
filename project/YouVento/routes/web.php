<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistreController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home',[homeController::class,'index']);
Route::get('/profiles',[ProfileController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('registre',[RegistreController::class,'index']);
Route::post('store',[RegistreController::class,'store']); 
Route::get('/club',[ClubController::class,'form']);
Route::post('/club',[ClubController::class,'addClub']);
Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/etudiant',[EtudiantController::class,'etudiant']);
Route::post('/addClub',[ClubController::class,'storeClub']);