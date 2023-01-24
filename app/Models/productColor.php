<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productColor extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id','color'];
    protected $table = 'products_color';
      

    public function product()
    {
        return $this->belongsTo(product::class);
    }
    
    public function productColorSize()
    {
        return $this->hasMany(productColorSize::class);
    }

}
