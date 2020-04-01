<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $table = 'sales';
    
    public $fillable = [
        'id',
        'user_id',
        'discount_id',
        'buyer',
        'description',
        'total',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function discount(){
        return $this->belongsTo('App\Models\Discount', 'discount_id', 'id');
    }

    public function almacenVenta(){
        return $this->belongsToMany('App\Models\Venta','almacen_venta', 'idAlmacen', 'idVenta');
    }   
}
