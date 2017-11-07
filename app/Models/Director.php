<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{

    protected $fillable = ['name'];

    public function titleMovie()
    {
        return $this->belongsToMany(Movie::class, 'directors_movies');
    }

    public function titleShow()
    {
        return $this->belongsToMany(Show::class, 'directors_shows');
    }
}
