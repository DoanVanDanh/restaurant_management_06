<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 
        'decription',  
        'percent',   
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
