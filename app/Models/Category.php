<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',  
        'parent_id', 
        'decription', 
    ];

    public function dishes()
    {
    	return $this->hasMany(Dish::class);
    }

}
