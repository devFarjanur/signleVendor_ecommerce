<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{


    protected $fillable = [
        'photo',
        'name',
        'price',
        'description',
        'stock', 
    ];

   
}
