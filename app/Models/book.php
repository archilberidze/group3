<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected $table ='books';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'author',
        'publication_date',
    ];

    public function scopeLikeAuthor($quary,$author){
        return $quary->where('author','like','%'.$author.'%');
    }
}

