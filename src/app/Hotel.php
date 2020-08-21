<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name'
    ];

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
