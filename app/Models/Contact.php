<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable  = [
        'image', 'name','title', 'contact', 'contact_link'
    ];
}
