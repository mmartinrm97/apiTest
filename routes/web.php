<?php

use App\Http\Resources\ProductoResource;
use App\Models\Disponibilidad;
use App\Models\Local;
use App\Models\LocalProducto;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    Log::info("this is info message");
    Log::error("This is error message");
    return view('welcome');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
