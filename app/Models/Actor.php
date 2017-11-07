<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $table = 'actors';

    public $fillable = [

    ];


    public function titleMovie()
    {
        return $this->belongsToMany(Movie::class, 'actors_movies')
                ->withPivot('known_for', 'char_name', 'id')
                ->orderBy('release_date', 'desc');
    }

    public function titleShow()
    {
        return $this->belongsToMany(Show::class, 'actors_shows')
                ->withPivot('known_for', 'char_name', 'id')
                ->orderBy('release_date', 'desc');
    }


    public function category()
    {
        return $this->morphToMany(Category::class, 'categories');
    }

    /**
     *
     * Returns default image if actor doesnt have an image
     *
     * @param $value
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getImageAttribute($value)
    {
        if (!$value) {
            return asset('officialcontent/imdbnoimage.jpg');
        }

        if (!str_contains($value, 'http')) {
            return url($value);
        }

        return $value;
    }


    /**
     * Fetches movies actor is known for
     *
     * @param $query
     * @return mixed
     */
    public function scopeKnown($query)
    {
        return $query->where('featured', '=', 1)->limit(8)->orderBy('release_date', 'desc')->remember(10)->get();
    }
    //TODO de featured nog in database bijvoegen


    /**
     * Returns actor model by actors name
     *
     * @param $query
     * @param $name
     * @return mixed
     */
    public function scopeByName($query, $name)
    {
        return $query->where('name', '=', $name)->firstOrFail();
    }
}
