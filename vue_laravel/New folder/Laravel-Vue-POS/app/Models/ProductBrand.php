<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductBrand extends Model
{
    use HasFactory;

    protected $table = 'product_brand';

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }


}
