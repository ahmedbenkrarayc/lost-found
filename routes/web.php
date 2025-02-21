<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;

Route::get('/', [AnnonceController::class, 'index'])->middleware('auth');
Route::middleware('auth')->prefix('/annonce')->group(function(){
    Route::get('/getAll', [AnnonceController::class, 'getAll']);
    Route::get('/create', [AnnonceController::class, 'create']);
    Route::post('/create', [AnnonceController::class, 'store']);
    Route::get('/{id}', [AnnonceController::class, 'show']);
    Route::post('/comment', [CommentController::class, 'store']);
});
Route::get('/category/getAll', [CategoryController::class, 'getAll'])->middleware('auth');
Route::get('/statistics', [AnnonceController::class, 'statistics'])->middleware('auth');

Route::get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');

require __DIR__.'/auth.php';
