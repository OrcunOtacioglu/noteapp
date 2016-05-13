<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = [
    	'name',
    	'description'
    ];

    /**
     * Gets the user who owns the notebook.
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Get the notes within the notebook.
     */
    public function notes()
    {
    	return $this->hasMany('App\Note');
    }
}
