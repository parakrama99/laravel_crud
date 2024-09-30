<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbtnproductController;
use App\Http\Controllers\userController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [dbtnproductController::class, 'fnindex'])->name('urinproduct.index');
Route::get('/product/create', [dbtnproductController::class, 'fncreate'])->name('urinproduct.create');

// submit button
Route::post('/product', [dbtnproductController::class, 'fnstore'])->name('urinproduct.store');


// edit button
Route::get('/product/{item}/edit', [dbtnproductController::class, 'fnedit'])->name('urinproduct.edit');


// update button
Route::put('/product/{item}/update', [dbtnproductController::class, 'fnupdate'])->name('urinproduct.update');


// delete button
Route::delete('/product/{item}/delete', [dbtnproductController::class, 'fndelete'])->name('urinproduct.delete');


// user view
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// user.edit,user.destroy,... for all this is the route
Route::resource('user', UserController::class)->shallow();




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// middleware

Route::middleware('auth')->group(function () {

    Route::get('/product', [dbtnproductController::class, 'fnindex'])->name('urinproduct.index');
Route::get('/product/create', [dbtnproductController::class, 'fncreate'])->name('urinproduct.create');

// submit button
Route::post('/product', [dbtnproductController::class, 'fnstore'])->name('urinproduct.store');


// edit button
Route::get('/product/{item}/edit', [dbtnproductController::class, 'fnedit'])->name('urinproduct.edit');


// update button
Route::put('/product/{item}/update', [dbtnproductController::class, 'fnupdate'])->name('urinproduct.update');


// delete button
Route::delete('/product/{item}/delete', [dbtnproductController::class, 'fndelete'])->name('urinproduct.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
