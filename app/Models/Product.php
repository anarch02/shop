<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'subcategory_id',
        'thumbnail',
        'code',
        'price',
        'discount',
        'status',
        'prev',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Product $product)
        {
            $product->slug = $product->slug ?? str($product->title)->slug();
        });
    }
}
