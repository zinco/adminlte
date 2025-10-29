<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('exemplo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//rotas do usuario

Route::group(['prefix' => 'usuario'], function(){



    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::get('{id}/show',[UserController::class,'show'])->name('user.show');
    Route::get('{id}/edit',[UserController::class,'edit'])->name('user.edit');
    







});