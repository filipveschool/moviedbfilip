<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public $fillable = [
            ''
    ];

    public function episode()
    {
        return $this->hasMany(Episode::class)->orderBy('episode_number');
    }

    public function title()
    {
        return $this->belongsTo(Show::class);
    }

    public function scopeEpisode($query, $id, $num)
    {
        return $query->where('title_id', '=', $id)->whereNumber($num)->get();
    }
}
