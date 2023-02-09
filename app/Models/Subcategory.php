<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'category_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Subcategory $subcategory)
        {
            $subcategory->slug = $subcategory->slug ?? str($subcategory->title)->slug();
        });
    }

    /**
     * Get the category associated with the Subcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }


    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
