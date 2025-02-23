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
/* These lines of code are defining various routes for a web application using Laravel framework. Each
route specifies a URL path and associates it with a specific controller method that should be
executed when that URL is accessed using the specified HTTP method. */
Route::get('/home',[homeController::class,'index']);
Route::get('/profiles',[ProfileController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('registre',[RegistreController::class,'index']);
Route::post('store',[RegistreController::class,'store']); 
Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/etudiant',[EtudiantController::class,'etudiant']);
Route::post('/addClub',[ClubController::class,'storeClub']);
Route::get('/clubs',[ClubController::class,'index']);
Route::get('/editClub',[ClubController::class,'editClub']);
Route::put('/editClub',[ClubController::class,'Update']);
Route::delete('/deleteClub/{club}',[ClubController::class,'deleteClub'])
->name('clubs.delete');