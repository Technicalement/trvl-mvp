<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/create-trip', [TripController::class, 'create'])->name('trip.create');
    Route::post('/create-trip', [TripController::class, 'addTrip'])->name('trip.add');
    Route::get('/trip/{id}/edit', [TripController::class, 'edit'])->name('edit');
    //Route::patch('/trip/{id}', [TripController::class, 'update'])->name('update');
    Route::get('/trips', [TripController::class, 'index'])->name('trip.trips');
    Route::get('/trip/{id}', [TripController::class, 'getTrip'])->name('trip');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
});
require __DIR__.'/auth.php';
