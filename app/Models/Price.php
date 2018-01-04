<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'price',   
    ];

    public function dishes()
    {
    	return $this->belongsToMany(Dish::class, 'price_id', 'dish_id')->withPivot('time');
    }

}
