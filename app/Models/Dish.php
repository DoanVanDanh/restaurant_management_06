<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'category_id', 
        'name',  
        'images', 
        'decription', 
    ];

    public function catogery()
    {
    	return $this->belongsTo(Category::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

     public function prices()
    {
        return $this->belongsToMany(Price::class, 'price_id', 'dish_id')->withPivot('time');
    }
}
