<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';
    protected $fillable = ['product_heading', 'flavor', 'deleted_at'];

    public function scopeChosenElements($query, $skip)
    {
        return $query->orderBy('id', 'asc')->take(5)->skip($skip)->get();
    }

}
