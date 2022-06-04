<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table="product_models";
    protected $fillable=["id","product__name","price"];
    protected $primaryKey="id";

     public function product_type()
    {
        # code...
        return $this->belongsTo('App/Models','id_type','id'); 
    }
    use HasFactory;
}
