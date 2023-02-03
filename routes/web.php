<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameAccountController;

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/game_account', [GameAccountController::class, 'index'])->name('GameAccount.index');
Route::get('/game_account/create', [GameAccountController::class, 'create'])->name('GameAccount.create');
Route::post('/game_account/insert', [GameAccountController::class, 'insert'])->name('GameAccount.insert');
Route::get('/game_account/{account}/edit', [GameAccountController::class, 'edit'])->name('GameAccount.edit');
Route::post('/game_account/{account}/update', [GameAccountController::class, 'update'])->name('GameAccount.update');
Route::get('/game_account/{account}/delete', [GameAccountController::class, 'delete'])->name('GameAccount.delete');