<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
    protected $fillable = [
    	'name',
    	'content'
    ];

    /**
     * Get the user who owns the note
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
