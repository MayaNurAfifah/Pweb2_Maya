<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TernakController;
use App\Http\Controllers\ProfileController;
use App\Models\Ternak;

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


require __DIR__.'/auth.php';

route::get('/logout',[ProfileController::class,'logout']);
route::get('/ternak',[TernakController::class,'index'])->name('ternak');

route::get('/tambahternak',[TernakController::class,'tambahternak'])->name('tambahternak');
route::post('/insertdataternak',[TernakController::class,'insertdataternak'])->name('insertdataternak');

route::get('/tampilternak{id}',[TernakController::class,'tampilternak'])->name('tampilternak');
route::post('/updatedataternak{id}',[TernakController::class,'updatedataternak'])->name('updatedataternak');

route::get('/deletedataternak/{id}',[TernakController::class,'deletedataternak'])->name('deletedataternak');

route::get('/tabelternak',[TernakController::class,'tabelternak'])->name('tabelternak');
route::get('/formternak',[TernakController::class,'formternak'])->name('formternak');