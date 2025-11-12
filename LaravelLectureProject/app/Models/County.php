<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region',
    ];

    public function towns()
    {
        return $this->hasMany(\App\Models\Town::class, 'name');
    }
}
