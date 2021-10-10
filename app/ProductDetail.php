<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    public $timestamps = false;

    protected $fillable=[
        'product_id','serving_size','serving_per_container','shelf_life','other_ingredients'
        ,'how_to_take','warnings','notes'
    ]; 

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
