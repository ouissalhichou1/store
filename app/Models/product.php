<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'name', 'description', 'image', 'price', 'discount_price', 'category_id'];
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(category::class,'category_id');
    }

    public function productColorSize()
    {
        return $this->hasMany(productColorSize::class,'product_id');
    }

    public function productColor()
    {
        return $this->hasMany(productColor::class,'product_id');
    }

    public function productSize()
    {
        return $this->hasMany(productSize::class,'product_id');
    }

}
