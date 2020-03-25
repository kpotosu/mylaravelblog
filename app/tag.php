<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = array('tag');

    public function posts() {
        return $this->belongsToMany('App\Post','post_tags','post_id','tag_id');
    }
}
