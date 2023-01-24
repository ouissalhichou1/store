<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userAdress extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'adress', 'city', 'country', 'emal', 'phone','name'];
    protected $table = 'user_adresses';

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
