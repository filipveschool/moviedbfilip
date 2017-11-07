<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';

    public $fillable = [
            'local',
            'web',
            'title_id',
            'type'
    ];

    /**
     * Append path attribute to model
     * @var array
     */
    protected $appends = ['path'];

    public function getPathAttribute()
    {
        if ($this->local) {
            return url($this->local);
        }

        return url($this->web);
    }
}
