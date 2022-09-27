<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productosController;



Route::redirect('/','/producto');


Route::resource('/producto', productosController::class);