<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/form',[RoomController::class,'show_form']);
Route::post('/form',[RoomController::class,'handleAddRoom'])->name('create');
Route::get('/room',[RoomController::class,'show_hotel'])->name('show_hotel');

