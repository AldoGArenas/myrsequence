<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    public $table = 'buys';
    
    public $fillable = [
        'id',
        'user_id',
        'description',
        'total',
        'provider',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function stockBuy(){
        return $this->belongsToMany('App\Models\Stock','sotck_buy', 'stock_id', 'buy_id');
    }   
}
