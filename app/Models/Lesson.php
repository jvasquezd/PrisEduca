<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    /**
     * @var mixed
     */

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }

    public function description(){
        return $this->hasOne('App\Models\Description');
    }
    // Relationship one to many inverse
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }
    // Relationship many to many
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    // Relationship one to one polimorphy
    public function resource(){
        return $this->morphOne('App\Models\Resource','resourceable');
    }
    // Relationship one to many polimorphy
    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');
    }
    public function reactions(){
        return $this->morphMany('App\Models\Rection','reactionable');
    }

}
