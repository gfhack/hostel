<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'description', 'hotel_id'
    ];

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
}
