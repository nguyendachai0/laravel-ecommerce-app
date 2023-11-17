<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = (new CartItem)->getCartById(auth()->id());
        $totalItems = (new CartItem)->getTotalItemsInCart(auth()->id());
        $totalPrice = (new CartItem)->getTotalPriceInCart(auth()->id());

        return view('cart', compact(
            'cartItems',
            'totalItems',
            'totalPrice',
        ));
    }
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function addToCart($productID)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to perform this action.');
        }
        $product = Product::findOrFail($productID);

        $cartItem = new CartItem();
        $cartItem->product_id = $product->id;
        $cartItem->quantity = 1;
        $cartItem->user_id = auth()->user()->id;


        $cartItem->save();

        return redirect()->route('home')->with('success', 'Item added to cart.');
    }

    public function update(CartItem $cart)
    {
        // Logic to update cart item quantity

        return redirect()->route('cart.index')->with('success', 'Cart updated.');
    }

    public function delete($cartItemId)
    {
        $cartItem = CartItem::find($cartItemId);

        if (!$cartItem) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }

        $cartItem->delete();

        return redirect()->route('cart.list')->with('success', 'Item added to cart.');
    }
}
