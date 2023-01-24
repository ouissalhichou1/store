<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'order_id', 'product_color_size_id', 'quantity', 'price', 'discount'];
    protected $table = 'orders_details';

    public function order()
    {
        return $this->belongsTo(order::class);
    }

    public function productColorSize()
    {
        return $this->belongsTo(productColorSize::class);
    }

}


