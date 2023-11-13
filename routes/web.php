<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

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

Route::get('/peserta',[PesertaController::class, 'index'])->name('peserta.index');
Route::get('/peserta/store', [PesertaController::class, 'indexStore'])->name('peserta.page');
Route::post('/peserta/store', [PesertaController::class, 'store'])->name('peserta.store');
Route::delete('/peserta/{id}', [PesertaController::class, 'destroye'])->name('peserta.delete');
Route::get('/peserta/update/{id}', [PesertaController::class, 'indexUpdate'])->name('peserta.update');
Route::put('/peserta/update/{id}', [PesertaController::class, 'update'])->name('peserta.edit');
Route::get('/peserta/detail/{id}', [PesertaController::class, 'detail'])->name('peserta.detail');

