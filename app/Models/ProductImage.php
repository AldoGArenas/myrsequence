<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public $table = 'product_images';
    
    public $fillable = [
        'id',
        'product_id',
        'image',
    ];
    
    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
