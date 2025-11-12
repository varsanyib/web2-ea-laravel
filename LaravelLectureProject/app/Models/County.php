<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $table = 'counties';
    
    // Ha a primary key nem integer
    protected $primaryKey = 'name';
    public $incrementing = false; // mivel string
    protected $keyType = 'string';

    protected $fillable = ['name', 'region'];
}