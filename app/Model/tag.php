<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    /**
     * The roles that belong to the tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Model\Post');
    }
}
