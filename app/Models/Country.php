<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table ='country';
    public $timestamps = false;
    protected $fillable = [
       'name'
    ];

    public function books(){
        return $this->hasMany(Books::class,'country_id', 'id');
    }

    public function product(){
        return $this->belongsToMany(Product::class,'country_product','country_id','product_id');
    }
}
