<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    
    protected $table = 'restaurants';

    protected $fillable = [
        'name', 'email', 'address',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
