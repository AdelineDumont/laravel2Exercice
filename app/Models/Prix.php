<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prix extends Model
{
    /**
    * The books that belong to the genre.
    */
    public function parfums()
    {
        return $this->belongsToMany(Parfum::class);
    }
}