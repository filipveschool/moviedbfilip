<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = 'movies';

    public $fillable = [
            'title',
            'background',
            'budget',
            'homepageurl',
            'tmdb_id',
            'imdb_id',
            'original_language',
            'original_title',
            'overview',
            'tmdb_popularity',
            'poster',
            'release_date',
            'revenue',
            'runtime',
            'status',
            'tagline',
            'tmdb_rating',
            'tmdb_vote_count'
    ];

    /**
     *
     * Format genre so it can be used as a filter for grid.
     *
     * @param $value
     * @return string
     */
    public function getGenreAttribute($value)
    {
        $genre = str_replace(',', ' | ', $value);

        return trim($genre, ' | ');
    }

    /**
     *
     * Format budget
     *
     * @param $value
     * @return mixed
     */
    public function getBudgetAttribute($value)
    {
        if ($value != '$0') {
            return $value;
        }
    }

    /**
     *
     * Format revenue
     *
     * @param $value
     * @return mixed
     */
    public function getRevenueAttribute($value)
    {
        if ($value != '$0') {
            return $value;
        }
    }

    /**
     *
     * Returns default background if none exists
     *
     * @param $value
     * @return mixed
     */
    public function getBackgroundAttribute($value)
    {
        if (!$value) {
            return asset('officialcontent/cinema.jpg');
        }

        if (!str_contains($value, 'http')) {
            return url($value);
        }

        return $value;
    }

    /**
     *
     * Returns default image if movie doesnt have poster
     *
     * @param $value
     * @return mixed
     */
    public function getPosterAttribute($value)
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
     *
     * Returns default background if none exists
     *
     * @param $value
     * @return mixed
     */
    public function getReleaseDateAttribute($value)
    {
        return dateFormatToYearMonthDayFormat($value);
    }

    /**
     * return all actors that belong to 1 movie
     */
    public function actor()
    {
        return $this->belongsToMany(Actor::class, 'actors_movies')
                ->withPivot('known_for', 'char_name', 'id');
    }

    /**
     * Return all movie titmes that are favorited or watchlisted by a user
     * @return $this
     */
    public function user()
    {
        return $this->belongsToMany(User::class, 'users_movies')
                ->withPivot('favorite', 'watchlist');
    }

    /**
     * Return all images that belong to a movie
     * @return $this
     */
    public function image()
    {
        return $this->hasMany(Image::class)
                ->orderBy('created_at', 'asc');
    }

    /**
     * Return all directors of a movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function director()
    {
        return $this->belongsToMany(Director::class, 'directors_movies');
    }

    /**
     * Return all categories of a movie
     */
    public function category()
    {
        return $this->belongsToMany(Category::class, 'categories_movies');
    }

    public function writer()
    {
        return $this->belongsToMany(Writer::class, 'writers_movies');
    }

    // For tv shows

    public function season()
    {
        return $this->hasMany(Season::class)->orderBy('number', 'asc');
    }

    /** Fetches title with relations by id
     *
     * @param $query
     * @param $id
     * @return mixed
     */
    public function scopeById($query, $id)
    {
        return $query->with('Actor', 'Image', 'Director', 'Writer', 'Season.Episode')->findOrFail($id);
    }


}
