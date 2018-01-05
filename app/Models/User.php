<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 
        'password', 
        'email',
        'phone', 
        'adreess', 
        'rule', 
        'salary', 
        'description', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
