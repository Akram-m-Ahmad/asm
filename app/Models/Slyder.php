<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slyder extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'details','image'
    ];
}
