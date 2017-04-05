<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $fillable = [
    'commented_on', 'commented_by', 'comment', 'date'
    ];
}
