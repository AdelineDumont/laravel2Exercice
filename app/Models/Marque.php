<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    /**
    * Get the books for the author.
    */
    public function parfums()
    {
        return $this->hasMany(Parfum::class);
    }
}