<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $fillable = ['title', 'content', 'slug'];

    protected $sluggable = [
        'build_from'    => 'title',
        'save_to'       => 'slug'
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }

}
