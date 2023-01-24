<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productColorSize extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'product_size_id', 'product_color_id', 'quantity', 'price two', 'discount', 'status'];
    protected $table = 'products_color_size';


    public function productColor()
    {
        return $this->belongsTo(productColor::class);
    }

    public function productSize()
    {
        return $this->belongsTo(productSize::class);
    }

   

}   
