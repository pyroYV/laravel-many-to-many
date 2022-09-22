<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'post_title',
        'user_id',
        'post_content',
        'post_image',
        'post_creation_date'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
