<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use \Rutorika\Sortable\SortableTrait;
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';
    protected $fillable = ['product_heading', 'flavor', 'order', 'deleted_at'];

    public function scopeChosenElements($query, $skip)
    {
//        return $query->where('order', '>=', $orderMin)->where('order', '<=', $orderMax)->orderBy('flavor', 'asc')->get();
        return $query->orderBy('flavor', 'asc')->take(5)->skip($skip)->get();
    }

}
