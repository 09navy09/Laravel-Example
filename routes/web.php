<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

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
});

Route::get('/add-employee',[FrontendController::class,'add']);
Route::post('/store-employee',[BackendController::class,'store']);
Route::get('/employee-dashboard',[BackendController::class,'dashboard']);
Route::get('/employee/edit/{id}',[BackendController::class,'edit']);
Route::post('/employee/update/{id}',[BackendController::class,'update']);
Route::get('/employee/delete/{id}',[BackendController::class,'delete']);
Route::get('/employee/deleteAll',[BackendController::class,'deleteAll']);

require __DIR__.'/auth.php';
