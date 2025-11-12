<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    protected $fillable = [
        'town_name',
        'frequency',
        'power',
        'name',
        'address',
    ];
}
