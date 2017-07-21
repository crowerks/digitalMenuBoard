<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Special extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['special', 'active', 'pricing', 'deleted_at'];


    public function scopeActive($query)
    {
      $input =  Special::pluck('active');
//    $arr = [];
      foreach($input as $i) {
  //       array_push($arr, $i);
        if($i == 2) {
          return true;
        }
      }
//     if (in_array(2, $arr)){
//       return true;
//
//     }else {
//      return false;
//     }
       return false;
    }
}
