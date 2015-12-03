<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [];

    protected $dates = ['modified_at'];

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
