<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public $timestamps = false;
	protected $fillable = [
		'user_id', 
		'content', 
		'commentable_id', 
		'commentable_type',  
	];

	public function dish()
	{
		return $this->belongsTo(Dish::class);
	}

	public function restaurant()
	{
		return $this->belongsTo(Restaurant::class);
	}

	public function comment()
	{
		return $this->belongsTo(User::class);
	}
}
