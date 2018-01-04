<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'user_id', 
        'table_id', 
        'dish_id', 
        'quanlity',   
    ];

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
