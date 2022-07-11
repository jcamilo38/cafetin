<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Reference\Reference;

class Product extends Model
{

    protected $fillable =
    [
        'name',
        'Reference',
        'price' ,
        'weight',
        'stock',
        'category_id'
    ];



    use HasFactory;
}
