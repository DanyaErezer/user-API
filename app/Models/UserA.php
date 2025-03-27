<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserA extends Model
{
    protected $fillable = [
        'email',
        'password',
        'gender'
    ];
}
