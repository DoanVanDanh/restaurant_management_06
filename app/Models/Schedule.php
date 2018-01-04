<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 
        'schedules',  
        'time', 
        'status', 
        'reason',  
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
