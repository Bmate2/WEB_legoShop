<?php

use App\Http\Controllers\LegoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Models\Lego;
use Illuminate\Support\Facades\Route;

Route::get('/myLogin',[UserController::class,'loginView'])->name('loginView');
Route::get('/myRegister',[UserController::class,'registerView'])->name('registerView');

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/legos', [LegoController::class,'index'])->name('all_lego');
Route::get('/legos/{code}/comments', [LegoController::class,'show'])->name('lego_comments');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/addLego',[LegoController::class,"create"])->name('add_lego');
    Route::post('/storeLego',[LegoController::class,"store"])->name('store_lego');
    Route::get('/categories', [CategoryController::class,'index'])->name('categories.view');
    Route::post('/categories', [CategoryController::class,'store'])->name('categories.store');
    Route::delete('/categories/{category}', [CategoryController::class,'destroy'])->name('categories.delete');
    Route::get('/legos/edit/{code}',[LegoController::class,'edit'])->name('show_edit_lego');
    Route::put('/legos/{lego}', [LegoController::class,'update'])->name('update_lego');
    Route::delete('/legos/delete/{lego}', [LegoController::class,'destroy'])->name('delete_lego');
    
    Route::post('/api/ratelego',[ReviewController::class,'create'])->name('rate_lego');





});


require __DIR__.'/auth.php';




