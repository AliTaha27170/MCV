<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BestSeller extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'product_id'
    ]; 
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
