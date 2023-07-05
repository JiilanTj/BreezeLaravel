<?php

use App\Http\Controllers\DepositController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\Macau4DController;
use App\Http\Controllers\Macau3DController;
use App\Http\Controllers\WithdrawController;



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

Route::get('/macau4d', [Macau4DController::class, 'index']);
Route::post('/macau4d/submit', [Macau4DController::class, 'submit']);

Route::get('/macau3d', [Macau3DController::class, 'index']);
Route::post('/macau3d/submit', [Macau3DController::class, 'submit']);

Route::get('/macau2ddepan', [Macau2DDepanController::class, 'index']);
Route::post('/macau2ddepan/submit', [Macau2DDepanController::class, 'submit']);

Route::get('/macau2dtengah', [Macau2DTengahController::class, 'index']);
Route::post('/macau2dtengah/submit', [Macau2DTengahController::class, 'submit']);

Route::get('/macau2dbelakang', [Macau2DBelakangController::class, 'index']);
Route::post('/macau2dbelakang/submit', [Macau2DBelakangController::class, 'submit']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/deposit', [BankController::class, 'showDepositPage'])->name('deposit');
Route::post('/simpan-transaksi', [BankController::class, 'simpanTransaksi'])->name('simpan.transaksi');

Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw');
Route::post('/simpan-transaksiwd', [WithdrawController::class, 'simpanTransaksiwd'])->name('simpan.transaksiwd');




require __DIR__.'/auth.php';
