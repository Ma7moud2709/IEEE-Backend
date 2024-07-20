<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function Comments(){
        return $this->hasMany(Comment::class);
    }

    public function Tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'post_id' );
    }
}
