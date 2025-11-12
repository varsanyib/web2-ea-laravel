<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DiagramController;
use App\Http\Controllers\RadioController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\UserController;

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
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
});

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/diagram', [DiagramController::class, 'index'])->name('diagram');


Route::middleware('auth')->group(function () {
    Route::get('/radios', [RadioController::class, 'index'])->name('radios.index');
    Route::get('/radios/create', [RadioController::class, 'create'])->name('radios.create');
    Route::post('/radios', [RadioController::class, 'store'])->name('radios.store');
    Route::get('/radios/{radio}', [RadioController::class, 'show'])->name('radios.show');
    Route::get('/radios/{radio}/edit', [RadioController::class, 'edit'])->name('radios.edit');
    Route::put('/radios/{radio}', [RadioController::class, 'update'])->name('radios.update');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::delete('radios/{radio}', [RadioController::class, 'destroy'])->name('radios.destroy');
    Route::get('/admin', function () { return view('admin.index'); })->name('admin.home');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

require __DIR__.'/auth.php';
