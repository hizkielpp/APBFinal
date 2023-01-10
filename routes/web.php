<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;

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

Route::get('/',[PetaController::class,'index'])->name('admin.index');
Route::post('/storePeta',[PetaController::class,'store'])->name('peta.store');
Route::post('/hapusPeta',[PetaController::class,'delete'])->name('peta.delete');
Route::post('/editPeta',[PetaController::class,'edit'])->name('peta.edit');
Route::get('/show/{id}',[petaController::class,'show'])->name('peta.show');
