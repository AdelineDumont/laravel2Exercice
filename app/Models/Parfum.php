<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parfum extends Model
{
    /**
    * Get the author that owns the book.
    */
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    /**
    * The genres that belong to the book.
    */
    public function prix()
    {
        return $this->belongsToMany(Prix::class);
    }
}