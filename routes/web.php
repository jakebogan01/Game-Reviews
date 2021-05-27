<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GamesController;

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

// show admin panel
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('auth');
// update user
Route::post('/admin',[AdminController::class,'update'])->name('edit')->middleware('auth');

// rollback deleted data
Route::post('/delete',[GamesController::class,'restore'])->name('rollback');

// show the logout view
Route::post('/logout',[LogoutController::class,'store'])->name('logout');


// show the login view
Route::get('/login',[LoginController::class,'index'])->name('login');
// pass data to users table for storage
Route::post('/login',[LoginController::class,'store']);


// show register view
Route::get('/register',[RegisterController::class,'index'])->name('register');
// pass data to users table for storage
Route::post('/register',[RegisterController::class,'store']);


// show home view
Route::get('/',[GamesController::class,'index'])->name('home');
// show delete a game view
Route::get('/delete',[GamesController::class,'gamelist'])->name('games.delete')->middleware('auth');
// delete a game
Route::delete('/{id}',[GamesController::class,'destroy'])->name('games.destroy');
// request to show all games more than just 10
Route::post('/',[GamesController::class,'update'])->name('games.update');
// show add a game view
Route::get('/create',[GamesController::class,'create'])->name('games.create')->middleware('auth');
// request to add a game to the game database
Route::post('/create',[GamesController::class,'store'])->name('games.store');
// show a details page of a game
Route::get('/{id}',[GamesController::class,'show'])->name('games.show');