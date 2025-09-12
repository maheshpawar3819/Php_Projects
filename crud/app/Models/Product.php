<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HashFactory;

    protected $fillable=[
        'name',
        'qty',
        'price',
        'description'
    ];
}
