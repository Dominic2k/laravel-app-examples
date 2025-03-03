<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\TaoBangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

Route::get('/form',[RoomController::class,'show_form'])->name('form');
Route::post('/form',[RoomController::class,'handleAddRoom'])->name('create');
Route::get('/room',[RoomController::class,'show_hotel'])->name('show_hotel');

Route::get('/clear-session', [RoomController::class, 'clearSession'])->name('clear_session');


Route::resource('products', ProductController::class);

//Route::get('index', [PageController::class, 'getIndex'])->name('index');
Route::get('/index', [PageController::class, 'getIndex']);

//route::get('database', function () {
//    Schema::create('products', function ($table) {
//        $table->increments('id');
//        $table->string('name',50);
//        $table->decimal('price', 10, 2);
//        $table->string('image',255);
//    });
//});
route::get('database', [TaoBangController::class, 'createTable']);
