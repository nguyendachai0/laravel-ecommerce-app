<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $fillable = [
        'first_name',
        'order_id',
        'last_name',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'state',
        'zipcode',
        'country_code',
        'created_at',
        'updated_at',
    ];
    protected $guarded = [
        'id'
    ];
}
