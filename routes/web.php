<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/form',[RoomController::class,'show_form'])->name('form');
Route::post('/form',[RoomController::class,'handleAddRoom'])->name('create');
Route::get('/room',[RoomController::class,'show_hotel'])->name('show_hotel');

Route::get('/clear-session', [RoomController::class, 'clearSession'])->name('clear_session');


Route::resource('products', ProductController::class);
