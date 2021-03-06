<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'image', 'description',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
