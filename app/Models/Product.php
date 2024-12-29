<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable  = [
        'product_name', 'cover', 'category', 'specification', 'knowledge', 'benefit', 'advantage'
    ];

    public function images()
    {
        return $this->hasMany(ProductHasImage::class, 'product_id');
    }
}
