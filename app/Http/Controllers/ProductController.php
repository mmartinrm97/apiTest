<?php

namespace App\Http\Controllers;

use App\Models\LocalsProducts;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        // $products = Product::with(['locals.presentations' => function ($locals) {
        //     // $locals->where('products.id', 1);
        // }])
        // ->where('id', 1)
        //     // ->whereHas('locals.presentations', function ($localsPresentations) {
        //     //     $localsPresentations->where('presentations.local_product_id', 'product.id');
        //     // })
        //     ->get();

        // $products = Product::with(['locals' => fn ($local) => $local->where('descripcion', 'Local Claudeburgh')])
        //     ->whereHas('locals', function ($query) {
        //         $query->where('descripcion', 'Local Claudeburgh');
        //     })
        //     ->get();
        $products = Product::with(['locals.presentations'])->get();
        return $products;

        // return LocalsProducts::all();
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
