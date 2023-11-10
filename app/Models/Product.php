<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'meta_titles',
        'meta_keyword',
        'meta_description',
        'status',
        'created_by',
        'updated_by',
        'updated_at',
        'deleted_at',
        'deleted_by',
    ];
    protected $guard = [
        'id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
