<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {

        $product = Product::findBySlug($slug);

        return view('products.show', ['product' => $product]);
    }
    public function getTop10Newest()
    {
        return  Product::orderBy('created_at', 'desc')->take(10)->get();
    }
}
