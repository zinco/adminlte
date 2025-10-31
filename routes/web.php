<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('exemplo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


          
        
//Route::group(['middleware' => 'auth'], function(){//inicio do grupo de restrição de acesso 


       //rotas do usuario

        Route::group(['prefix' => 'usuario', 'middleware' => 'auth'], function(){//inicio grupo de rotas do usuario



            Route::get('/index', [UserController::class, 'index'])->name('user.index');
            Route::get('/create', [UserController::class, 'create'])->name('user.create');
            Route::get('{id}/show',[UserController::class,'show'])->name('user.show');
            Route::get('{id}/edit',[UserController::class,'edit'])->name('user.edit'); 
            Route::post('store',[UserController::class,'store'])->name('user.store');
            Route::PUT('{id}/update',[UserController::class,'update'])->name('user.update'); 






        });//final grupo de rotas do usuario

        //


  //});  //final do grupo de restrição de acesso    

