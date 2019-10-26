<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movielist extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'movielist';
    
    protected $fillable = [
        'poster', 'title', 'year', 'imdbID', 'quality', 'sub', 'link'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}