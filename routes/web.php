<?php

use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\KelolaPesananController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilPembeliController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn ()=> view('home'))->name('home');

Route::resource('/product',ProductController::class);

Route::middleware(['auth', 'verified', 'role:admin|penjual'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:admin|penjual'])->group(function(){
    Route::resource('/dashboard/kelolaproducts',DashboardProductController::class);
    Route::resource('/dashboard/daftarorder',KelolaPesananController::class);
    Route::get('/dashboard', function () {
        return view('dashboard.dash-admin');
    })->name('dashboard');
});
Route::middleware(['auth', 'verified', 'role:admin|pembeli'])->group(function(){
    Route::get('/user', [ProfilPembeliController::class, 'edituser'])->name('user.edit');
    Route::patch('/user', [ProfilPembeliController::class, 'updateuser'])->name('user.update');
    Route::delete('/user', [ProfilPembeliController::class, 'destroyuser'])->name('user.destroy');
    Route::get('/payment/{id}', [PaymentController::class, 'payment']);
    Route::post('/payment/{id}',[PaymentController::class, 'payment_post']);
});

require __DIR__.'/auth.php';
