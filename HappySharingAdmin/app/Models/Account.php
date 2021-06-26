<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = [
        'username', 'password', 'name', 'phone', 'role', 'payment', 'images' 
    ];
}
