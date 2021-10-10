<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $timestamps = false;
    protected $fillable=[
        'code','description','name','brand_id','image','category_id','has_details','big_image'
    ]; 
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
    public function product_detail()
    {
        return $this->hasOne('App\ProductDetail');
    }
}
