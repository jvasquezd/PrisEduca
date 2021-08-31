<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function commetable(){
        return $this->morphTo();
    }

    //Relationship one to many inverse
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relationship one to many polimorphy
    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');
    }
    public function reactions(){
        return $this->morphMany('App\Models\Reaction','reactionable');
    }
}
