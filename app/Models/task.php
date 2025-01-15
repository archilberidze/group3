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
        'status',
    ];

    public function scopeLikeName($quary,$tittle){
        return $quary->where('tittle','like','%'.$tittle.'%');
    }



}
