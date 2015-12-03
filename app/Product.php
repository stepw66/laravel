<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [];

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
