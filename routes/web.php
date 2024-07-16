<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

Route::get('/principal', function () {
    return view('principal');
})->middleware(['auth', 'verified'])->name('principal');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/mis-datos', function () {
    return view('mis-datos');
})->middleware(['auth', 'verified'])->name('mis-datos');

Route::get('/ficha-medica', function () {
    return view('ficha-medica');
})->middleware(['auth', 'verified'])->name('ficha-medica');

Route::get('/ficha-nutricional', function () {
    return view('ficha-nutricional');
})->middleware(['auth', 'verified'])->name('ficha-nutricional');

Route::get('/tu-viaje', function () {
    return view('tu-viaje');
})->middleware(['auth', 'verified'])->name('tu-viaje');

Route::get('/mi-itinerario', function () {
    return view('mi-itinerario');
})->middleware(['auth', 'verified'])->name('mi-itinerario');

Route::get('/mi-fotoyvideo', function () {
    return view('mi-fotoyvideo');
})->middleware(['auth', 'verified'])->name('mi-fotoyvideo');

Route::get('/mi-documento', function () {
    return view('mi-documento');
})->middleware(['auth', 'verified'])->name('mi-documento');

Route::get('/mi-checkin', function () {
    return view('mi-checkin');
})->middleware(['auth', 'verified'])->name('mi-checkin');

require __DIR__ . '/auth.php';
