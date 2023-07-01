<?php

use App\Http\Controllers\DepositController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/deposit',  [DepositController::class, 'index'])->name('deposit');
Route::get('/deposit', [BankController::class, 'showDepositPage'])->name('deposit');
Route::post('/simpan-transaksi', [BankController::class, 'simpanTransaksi'])->name('simpan.transaksi');


require __DIR__.'/auth.php';
