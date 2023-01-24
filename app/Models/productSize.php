<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSize extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_color_size_id'];
    protected $table = 'products_size';


    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function productColorSize()
    {
        return $this->hasMany(productColorSize::class);
    }

}
