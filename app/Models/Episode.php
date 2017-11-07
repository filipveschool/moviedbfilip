<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
            ''
    ];

    public function title()
    {
        return $this->belongsTo(Show::class);
    }

    /**
     * Return the season the episode belongs to
     */
    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    /**
     *
     * Returns default image if title doesnt have poster
     *
     * @param $value
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getPosterAttribute($value)
    {
        if ($value && !str_contains($value, 'http')) {
            return url($value);
        }

        return $value;
    }
}
