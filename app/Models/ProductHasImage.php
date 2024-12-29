<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductHasImage extends Model
{
    protected $table = 'product_has_image';

    protected $fillable  = [
        'product_id', 'image'
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
