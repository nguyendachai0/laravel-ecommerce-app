<?php

use App\Models\CartItem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = (new App\Http\Controllers\ProductController)->getTop10Newest();
    $categories = (new App\Http\Controllers\CategoryController)->getLast4Categories();
    $top1Categories =  (new App\Http\Controllers\CategoryController)->getTop1Categories();
    $userId = auth()->id();
    $cartItems = (new CartItem)->getCartById($userId);

    return view('home', [
        'products' => $products,
        'categories' => $categories,
        'top1Categories' => $top1Categories,
        'cartItems' => $cartItems,

    ]);
})->name('home');

Route::get('/product/{slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');


Route::middleware(['auth.redirect'])->group(function () {

    Route::get('/cart', [CartController::class, 'index'])->name('cart.list');
    Route::delete('/cart/delete/{cartItemId}', [CartController::class, 'delete'])->name('cart.item.delete');
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update/{cart}', [CartController::class, 'update'])->name('cart.update');
});

Route::get('/login/google', [GoogleAuthController::class, 'redirect']);
Route::get('/login/google/callback', [GoogleAuthController::class, 'callbackGoogle'])->name('google.auth');
// Admin must be authenticated 
Route::middleware(['auth.redirect'])->group(function () {
    // Controller for role admin
    Route::prefix('admin')->group(function () {

        Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/category', 'index')->name('admin/category');
            Route::get('/category/create', 'create');
            Route::post('/category/create', 'store');
            Route::get('/category/edit/{id}', 'edit');
            Route::post('/category/update', 'update');
            Route::post('/category/delete', 'delete')->name('delete.category');
        });

        Route::controller(ProductController::class)->group(function () {
            Route::get('/product', 'index')->name('admin/product');
            Route::get('/product/create', 'create');
            Route::post('/product/create', 'store');
            Route::get('/product/edit/{id}', 'edit');
            Route::post('/product/update', 'update');
            Route::post('/product/delete', 'delete')->name('delete.product');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('/user', 'index')->name('admin/user');
            Route::get('/user/create', 'create');
            Route::post('/user/create', 'store')->name('admin.user.store');
            Route::get('/user/edit/{id}', 'edit');
            Route::post('/user/update', 'update');
            Route::post('/user/delete', 'delete')->name('delete.user');
        });

        Route::controller(OrderController::class)->group(function () {
            Route::get('/order', 'index')->name('admin/order');
        });
    });
    // Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    // Route::get('category/create', [CategoryController::class, 'create']);
    // Route::post('category/create', [CategoryController::class, 'store']);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
