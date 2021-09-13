<?php

use App\Http\Resources\ProductoResource;
use App\Models\LocalProducto;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    // return view('welcome');

    $producto = Producto::find(1);
    $producto->load('locales', 'presentaciones');
    // return ["producto" => $producto];
    
    return new ProductoResource($producto);
});
