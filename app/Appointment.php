<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
use App\Slot;

class Appointment extends Eloquent
{
    protected $collection = 'appointments_collection';

    protected $fillable = [
        'title',
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
