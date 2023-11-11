<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getTop5()
    {
        return Category::take(5)->get();
    }
}
