<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BuyerController;


Route::get('/menus', [BuyerController::class, 'index'])->name('menus.index');
Route::get('/buyer/menu-list', [BuyerController::class, 'menuList'])->name('buyer.menuList');



Route::get('/buyer/menu', [BuyerController::class, 'index'])->name('buyer.menu');
Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menus/create', [MenuController::class, 'create']);
Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus/{menu}/edit', [MenuController::class, 'edit']);
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menus.update');
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
// Rute untuk menampilkan form edit menu
Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');

Route::resource('menus', MenuController::class); // Menambahkan resource route untuk CRUD







