<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer(['home', 'cart', 'orders.index'], function ($view) {
            $products = (new \App\Http\Controllers\ProductController)->getTop10Newest();
            $categories = (new \App\Http\Controllers\CategoryController)->getLast4Categories();
            $top1Categories =  (new \App\Http\Controllers\CategoryController)->getTop1Categories();
            $userId = auth()->id();
            $cartItems = (new \App\Models\CartItem)->getCartById($userId);
            $totalItems = (new \App\Models\CartItem)->getTotalItemsInCart($userId);
            $totalPrice = (new \App\Models\CartItem)->getTotalPriceInCart($userId);

            $view->with([
                'products' => $products,
                'categories' => $categories,
                'top1Categories' => $top1Categories,
                'cartItems' => $cartItems,
                'totalItems' => $totalItems,
                'totalPrice' => $totalPrice,
            ]);
        });
    }
}
