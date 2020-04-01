<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public $table = 'discounts';
    
    public $fillable = [
        'id',
        'discount',
        'name',
    ];

    public function sale(){
        return $this->hasMany('App\Models\Sale', 'idDescuento', 'id');
    }
}
