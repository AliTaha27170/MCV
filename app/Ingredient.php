<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public $timestamps = false;

    protected $fillable=[
        'component','amount','daily_value','product_id'
    ]; 

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
