<?php

namespace App\Models;

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
}
