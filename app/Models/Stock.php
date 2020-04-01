<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $table = 'stock';
    
    public $fillable = [
        'id',
        'product_id',
        'buy_date',
    ];

    // public function producto(){
    //     return $this->belongsTo('App\Models\Producto', 'idProducto', 'id');
    // }
    // public function almacenCompra(){
    //     return $this->belongsToMany('App\Models\Compra','almacen_compra', 'idAlmacen', 'idCompra');
    // }   
    // public function almacenVenta(){
    //     return $this->belongsToMany('App\Models\Venta','almacen_venta', 'idAlmacen', 'idVenta');
    // }   
}
