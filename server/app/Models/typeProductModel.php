<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeProductModel extends Model
{
      protected $table="type__product"
      public function product(){
        return $this->hasMany('App/Models/ProductModel','id_type','id')
      }
    use HasFactory;
}
