<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable  = [
        'cover', 'title', 'category', 'writer', 'description'
    ];

}
