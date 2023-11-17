<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'status',
        'total_price',
        'created_at',
        'created_by',
        'user_id',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
    protected $guarded = [
        'id'
    ];
    /**
     * Get the user that owns the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the items for the order.
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function orderDetail()
    {
        return $this->hasOne(OrderDetail::class, 'order_id');
    }
}
