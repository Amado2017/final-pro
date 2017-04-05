<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
	protected $fillable = [
    'plate_number', 'side_number', 'initial_point', 'destination_point', 'departure_time', 'arrival_time', 'available_seat', 'total_seat', 'driver', 'assistant'
    ];
}
