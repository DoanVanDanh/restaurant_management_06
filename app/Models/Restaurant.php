<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 
        'address',  
        'phone', 
        'images', 
        'decription',  
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
