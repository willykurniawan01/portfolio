<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable = [
        'picture', 'description', 'greeting'
    ];
}
