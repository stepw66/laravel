<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['name'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
