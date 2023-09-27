<?php

use App\Http\Controllers\ControllerKosong;
use App\Http\Controllers\MenccobaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\GameController;
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

Route::get('/about', function () {
    return view('about', [
        "nama" => "XILFTEN",
        "jargon" => "Tonton semua anime favorit anda dengan kualitas terbaik!",
    ]);
});

Route::get('/boom',[
    MenccobaController::class, 'boomesport'
]);

Route::get('/routingController',[
    ControllerKosong::class, 'belajarController'
]);


// pertemuan 6
Route::get('/buku', [
    bukuController::class, 'index'
]);

Route::get('/buku/create', [
    bukuController::class, 'create'])-> name('buku.create');

Route::post('/buku', [
    bukuController::class, 'store'])-> name('buku.store');

Route::post('/buku/{id}', [bukuController::class, 'destroy'])->name('buku.destroy');

// buat update
// edit update
Route::get('/mahasiswa/edit/{id}', [bukuController::class, 'edit'])->name('buku.edit');
// store update
Route::post('/buku/update/{id}', [bukuController::class, 'update'])->name('buku.update');


// buat laprak
Route::get('/game', [
    GameController::class, 'store'
]);

// pembuatan CREATE
Route::get('/game/create', [
    GameController::class, 'create'])-> name('game.create');

Route::post('/game', [
    GameController::class, 'list'])-> name('game.store');

// EDIT
Route::get('/game/edit/{id_game}', [GameController::class, 'edit'])->name('game.edit');
// store update
Route::post('/game/update/{id_game}', [GameController::class, 'update'])->name('game.update');


// DELETE
Route::post('/game/{id_game}', [GameController::class, 'destroy'])->name('game.destroy');
