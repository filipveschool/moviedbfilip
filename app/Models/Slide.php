<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public $table = 'slides';

    public $timestamps = false;

    public function getImageAttribute($img)
    {
        if (!str_contains($img, 'http')) {
            return url($img);
        }

        return $img;
    }
}
