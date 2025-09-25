<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Post extends Model
{
    use HasFactory;
    //realacion muchos a uno inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //relacion muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //relacion polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
