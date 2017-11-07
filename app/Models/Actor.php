<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $table = 'actors';


    public function title()
    {

    }


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
