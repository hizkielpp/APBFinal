<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\AuthController;

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


Route::middleware(['checkAuth'])->group(function ()
{
    Route::get('/',[PetaController::class,'index'])->name('admin.index');
    Route::post('/storePeta',[PetaController::class,'store'])->name('peta.store');
    Route::post('/hapusPeta',[PetaController::class,'delete'])->name('peta.delete');
    Route::post('/editPeta',[PetaController::class,'edit'])->name('peta.edit');
    Route::get('/show/{id}',[petaController::class,'show'])->name('peta.show');
});
Route::get('/guest',[PetaController::class,'showToGuest'])->name('showToGuest');
Route::get('/login',function(){
    return view('login');
})->name('login');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');