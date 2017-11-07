<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    public $table = 'writers';

    /**
     * Get all movies that a writer made;
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function titleMovie()
    {
        return $this->belongsToMany(Movie::class, 'writers_movies');
    }

    /**
     * Get all tv shows that a writer made;
     *
     * TODO writers_shows nog implementeren
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function titleShow()
    {
        return $this->belongsToMany(Show::class, 'writers_shows');
    }
}
