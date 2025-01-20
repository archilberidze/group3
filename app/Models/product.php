<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $table ='products';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
    ];

    public function country(){
        return $this->belongsToMany(Country::class,'country_product','country_id','product_id');
    }
}
