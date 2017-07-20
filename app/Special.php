<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    protected $fillable = ['special', 'active', 'pricing'];

    public function scopeActive($query)
    {
        if ($query->where('active', 1)->first()) {
            return $query->where('active', 1)->first();
        }
        else {
           return "Please activate a special";
        }

    }

}
