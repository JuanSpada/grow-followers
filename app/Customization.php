<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    protected $fillable = [
        'follow','comment', 'private', 'comment1', 'comment2', 'comment3', 'likes'
    ];
    protected $hidden = [];
}
