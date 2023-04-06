<?php

use App\Http\Livewire\PieceShow;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/playmusic/{id}', [App\Http\Controllers\HomeController::class, 'show']);

// route of artist
Route::get('/users',[App\Http\Controllers\memController::class,'index'])->middleware(['auth','IsAdmin']);

Route::get('/artists',[App\Http\Controllers\artistsController::class,'index'])->middleware(['auth','IsAdmin']);

Route::post('/I_want_to_become_an_artist',[App\Http\Controllers\artistsController::class,'store'])->middleware(['auth','IsUser']);

Route::post('/updatUser/{id}',[App\Http\Controllers\artistsController::class,'update'])->middleware(['auth','IsUser']);

Route::get('/bands',[App\Http\Controllers\bandsController::class,'index'])->middleware(['auth','IsAdmin']);

Route::get('/cretebandes',[App\Http\Controllers\bandsController::class,'create'])->middleware(['auth','IsAdmin']);

Route::post('/storebanes',[App\Http\Controllers\bandsController::class,'store'])->middleware(['auth','IsAdmin']);

Route::get('/show/{id}',[App\Http\Controllers\bandsController::class,'show'])->middleware(['auth','IsAdmin']);

Route::get('/edit/{id}',[App\Http\Controllers\bandsController::class,'edit'])->middleware(['auth','IsAdmin']);

Route::post('/updateband/{id}',[App\Http\Controllers\bandsController::class,'update'])->middleware(['auth','IsAdmin']);

Route::delete('/deletbande/destroy/{id}',[App\Http\Controllers\bandsController::class,'destroy'])->middleware(['auth','IsAdmin']);

Route::get('/pieceMusical',[App\Http\Controllers\pieceMusicalController::class,'index'])->middleware(['auth','IsAdmin']);

Route::get('/createpiece',[App\Http\Controllers\pieceMusicalController::class,'create'])->middleware(['auth','IsAdmin']);

Route::get('/editpiece/{id}',[App\Http\Controllers\pieceMusicalController::class,'edit'])->middleware(['auth','IsAdmin']);

Route::post('/updatepiece/{id}',[App\Http\Controllers\pieceMusicalController::class,'update'])->middleware(['auth','IsAdmin']);

Route::post('/storepiece',[App\Http\Controllers\pieceMusicalController::class,'store'])->middleware(['auth','IsAdmin']);

Route::get('/showpiece/{id}',[App\Http\Controllers\pieceMusicalController::class,'show'])->middleware(['auth','IsAdmin']);

Route::delete('/deletepiece/{id}',[App\Http\Controllers\pieceMusicalController::class,'destroy'])->middleware(['auth','IsAdmin']);


// route of dachbard
Route::get('dachbord',[App\Http\Controllers\AdminController::class,'index'])->middleware(['auth','IsAdmin']);
// route of account
Route::get('account',function(){return view('user.account');})->middleware(['auth','IsUser']);

// Route::get('/home',[PieceShow::class,'search']);

Route::get('/home/search', [App\Http\Controllers\pieceMusicalController::class,'search'])->name('pieceMusical.search')->middleware(['auth','IsUser']);

// commentaires

Route::post('/createCommentaires', [App\Http\Controllers\commentairsController::class,'store']);

