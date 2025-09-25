<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // muchos a muchos
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
