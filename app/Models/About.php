<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle',
        'short_tittle',
        'short_description',
        'long_description',
        'about_image',
       
    ];
}
