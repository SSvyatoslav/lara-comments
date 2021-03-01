<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['body', 'parent_id'];

    public function newCollection(array $models = [])
    {
        return new CommentCollection($models);
    }
}
