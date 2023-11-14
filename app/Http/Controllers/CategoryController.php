<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getLast4Categories()
    {
        // Get the top 5 categories based on creation or update timestamps
        $top5Categories = Category::orderBy('created_at', 'desc')->take(5)->get();

        // Get the 4 most recent categories from the top 5
        $last4Categories = $top5Categories->slice(1)->values();;
        return $last4Categories;
    }
    public function getTop1Categories()
    {
        $top1Categories = Category::orderBy('created_at', 'desc')->take(1)->get();

        return $top1Categories;
    }
}
