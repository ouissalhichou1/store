<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'status', 'payment_method', 'payment_status', 'payment_id', 'total_price', 'adresse', 'phone', 'email', 'surname', 'shipping_price'];
    protected $table =  'orders';


public function user()
{
    return $this->belongsTo(user::class);
}


}    
