<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'cart_items';

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'created_at',
        'updated_at'
    ];
    protected $guard = [
        'id'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getCartById($userId)
    {
        return $this->with('product')->where('user_id', $userId)->get();
    }
    public function getTotalItemsInCart($userId)
    {
        return $this->where('user_id', $userId)->sum('quantity');
    }
    public function getTotalPriceInCart($userId)
    {
        $cartItems = $this->getCartById($userId);
        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {

            $totalPrice += (int) $cartItem->quantity * $cartItem['product']->price;
        }

        return $totalPrice;
    }
}
