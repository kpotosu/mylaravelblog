<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // * @var array
    //  */
    protected $fillable = [
        'url', 'title', 'description', 'content', 'image', 'blog', 'category_id'
    ];

 
     public function tags() {
        return $this->belongsToMany('App\Tag','post_tags','post_id','tag_id');
    }

    public function users() {
        return $this->belongsTo('App\User','id');
         // return $this->hasMany(\App\Post::class);
    }//
}
