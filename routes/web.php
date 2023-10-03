<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/page1', [ProfileController::class, 'index'])->name('page1');
    Route::get('/user',[UserController::class,'index'])->name('user');
    Route::get('/table',[TableController::class,'index'])->name('table');
    Route::post('/table',[TableController::class,'store'])->name('table-store');
    // Route::get('/tabel',[TableController::class,'index'])->name('tabel');
    Route::get('/user-show/{user}',[TableController::class,'show'])->name('user-show');
    // Route::patch('/user');
    Route::get('/user-edit/{user}/edit',[TableController::class,'edit'])->name('user-edit');
    Route::patch('/user-update/{user}/update', [TableController::class,'update'])->name('user-update');
    // Route::get('/create',[TableController::class,'store'])->name('create');
    Route::delete('delete/{id}', [TableController::class,'destroy'])->name('delete');
});



require __DIR__.'/auth.php';
