<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{

    protected $table ='task';
    public $timestamps = false;
    protected $fillable = [
        'tittle',
        'description',
    ];
}
