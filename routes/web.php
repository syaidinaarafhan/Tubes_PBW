<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalangDanaController;
use App\Http\Controllers\PaymentController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/GalangDana', [GalangDanaController::class, 'view'])->name('galangdana.page');
    Route::get('/GalangDana/page2', [GalangDanaController::class, 'tahap1'])->name('galangdana.page2');
    Route::post('/GalangDana/page2', [GalangDanaController::class, 'storeTahap1'])->name('galangdana.storeTahap1');
    Route::get('/GalangDana/page3', [GalangDanaController::class, 'tahap2'])->name('galangdana.page3');
    Route::post('/GalangDana/page3', [GalangDanaController::class, 'storetahap2'])->name('galangdana.storetahap2');
    Route::get('/GalangDana/page4', [GalangDanaController::class, 'tahap3'])->name('galangdana.page4');
    Route::post('/GalangDana/page4', [GalangDanaController::class, 'storeTahap3'])->name('galangdana.storeTahap3');
    Route::get('/dashboard', [GalangDanaController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/{id}', [GalangDanaController::class, 'kampById'])->name('kampPage');
}); 

Route::get('/transaksi', [PaymentController::class, 'index'])->name('transaksi.index');

Route::post('/transaksi', [PaymentController::class, 'store'])->name('transaksi.store');

Route::get('/transaksi/checkout', [PaymentController::class, 'checkoutIndex'])->name('transaksi.checkout');

require __DIR__.'/auth.php';
