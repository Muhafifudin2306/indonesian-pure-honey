<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SectionOne extends Model
{
    protected $table = 'section_ones';

    protected $fillable  = [
        'image', 'title', 'description'
    ];
}
