<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeownerController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/homeowner', [HomeownerController::class, 'index'])->name('homeowner.index');
Route::get('/homeowner/create', [HomeownerController::class, 'create'])->name('homeowner.create');
Route::post('/homeowner', [HomeownerController::class, 'store'])->name('homeowner.store');
Route::get('/homeowner/{id}/edit', [HomeownerController::class, 'edit'])->name('homeowner.edit');
Route::put('/homeowner/{id}', [HomeownerController::class, 'update'])->name('homeowner.update');
Route::delete('/homeowner/{id}', [HomeownerController::class, 'destroy'])->name('homeowner.destroy');
?>

