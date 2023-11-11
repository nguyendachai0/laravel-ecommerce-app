<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getTop8()
    {
        return Product::take(8)->get();
    }
}
