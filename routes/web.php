<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\MajorController;
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

Route::get('/welcome', [mahasiswaController::class, 'index'])->name('index');

Route::get('/createMahasiswa', [mahasiswaController::class, 'create'])->name('create');
Route::post('storeMahasiswa', [mahasiswaController::class, 'store'])->name('store');

Route::get('showMahasiswa/{id}', [mahasiswaController::class, 'show'])->name('show');

Route::get('/editMahasiswa/{id}', [mahasiswaController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [mahasiswaController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [mahasiswaController::class, 'delete'])->name('delete');

Route::get('/createMajors', [MajorController::class, 'create']);
Route::post('storeMajor', [MajorController::class, 'store']);
