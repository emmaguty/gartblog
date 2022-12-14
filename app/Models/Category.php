<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Relación 1 a M

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
