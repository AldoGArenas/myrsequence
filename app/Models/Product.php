<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'id',
        'name',
        'description',
        'price'
    ];

    // public function imagenesProducto(){
    //     return $this->hasMany('App\Models\ImagenProducto', 'idProducto', 'id');
    // }
    
    public function stock(){
        return $this->hasMany('App\Models\Stock', 'product_id', 'id');
    }
}
