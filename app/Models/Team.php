<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable  = [
        'name', 'position', 'image', 'linkedin', 'instagram', 'email'
    ];
}
