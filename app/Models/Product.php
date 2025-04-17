<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'main_category', 'sub_category_1', 'sub_category_2',
        'listed_price', 'discount_price', 'weight', 'quantity',
        'main_image', 'sub_image_1', 'sub_image_2', 'video',
        'description', 'author', 'publisher_isbn'
    ];
}
