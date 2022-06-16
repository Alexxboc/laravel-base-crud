<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //

    protected $fillable = ['title', 'description', 'thumb', 'cover_image', 'price'];
}
