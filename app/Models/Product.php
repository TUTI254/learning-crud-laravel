<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //define table fields that can be filled
    protected $fillable=[
        'name',
        'qty',
        'price',
        'description'
    ];

}
