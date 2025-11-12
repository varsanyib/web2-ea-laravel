<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name'];
    public function radios() { return $this->hasMany(Radio::class); }
}
