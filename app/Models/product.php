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
}