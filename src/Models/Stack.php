<?php

namespace NWBY\Pyramid\Models;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    protected $casts = [
        'fullstack' => 'array',
        'hosting' => 'array'
    ];
}
