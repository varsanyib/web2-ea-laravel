<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    protected $fillable = ['region_id','name','frequency'];
    public function region() { return $this->belongsTo(Region::class); }
}
