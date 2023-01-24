<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'logo', 'favicon', 'email', 'phone', 'address', 'facebook', 'youtube', 'tiktok'];
    protected $table = 'settings';
}
 