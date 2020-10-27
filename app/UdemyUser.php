<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UdemyUser extends Model
{
    
    protected $fillable = [
        'user_name', 'user_email', 'user_phone',
    ];
}
