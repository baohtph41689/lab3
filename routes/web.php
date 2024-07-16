<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('book')->group(function(){
    
// });
Route::get('/',[BookController::class,'listBook'])->name('book.index');
Route::get('/create',[BookController::class,'create'])->name('book.create');
Route::post('/create',[BookController::class,'store'])->name('book.store');
Route::get('/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::put('/edit/{id}',[BookController::class,'update'])->name('book.update');
Route::delete('/delete/{id}',[BookController::class,'destroy'])->name('book.destroy');