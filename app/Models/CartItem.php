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
}
