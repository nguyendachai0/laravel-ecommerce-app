<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';

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
}
