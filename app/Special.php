<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    protected $fillable = ['special', 'active'];

    public function scopeActive($query)
    {
        if (Special::where('active', 1)->first()) {
            return Special::where('active', 1)->first()->special;
        }
        else {
           return "Please input value";
        }

    }

}
