<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImage extends Model
{
    use HasFactory;
    protected $fillable = ['id','image', 'product_color_size_id'];
    protected $table = 'products_images';

    public function productColorSize()
    {
        return $this->belongsTo(productColorSize::class);
    }

}



