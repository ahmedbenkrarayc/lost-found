<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategoryController;

Route::get('/', [AnnonceController::class, 'index']);
Route::get('/annonce/getAll', [AnnonceController::class, 'getAll']);
Route::get('/annonce/create', [AnnonceController::class, 'create']);
Route::post('/annonce/create', [AnnonceController::class, 'store']);
Route::get('/annonce/{id}', [AnnonceController::class, 'show']);
Route::get('/category/getAll', [CategoryController::class, 'getAll']);

// Route::get('/image-url/{imageName}', function ($imageName) {
//     return response()->json(['image' => asset('storage/assets/images/' . $imageName)]);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
