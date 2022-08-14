<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'topic', 'catdet_id'
    ];
    public function catdet(){
        return $this->belongsTo('App\Models\catdet');
    }

}
