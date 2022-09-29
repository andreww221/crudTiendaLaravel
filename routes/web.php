<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productosController;



Route::redirect('/','/producto');



Route::middleware('verifiedProducts')->resource('/producto', productosController::class);



Route::get('/delete/{producto}',[productosController::class,'delete'])->name("producto.delete");





