<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['product_name', 'product_desc', 'thumbnail', 'price', 'quantity', 'gallery', 'category_id', 'brand_id'];
}
