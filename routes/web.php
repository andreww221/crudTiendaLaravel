<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productosController;



Route::redirect('/','/producto');



Route::middleware('verifiedProducts')->resource('/producto', productosController::class);





