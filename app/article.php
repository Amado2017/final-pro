<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
        'title', 'key_word', 'content', 'image', 'c_id'
    ];
}
