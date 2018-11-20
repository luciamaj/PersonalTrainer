<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
use App\Slot;

class Trainer extends Eloquent
{
    protected $collection = 'trainers_collection';

    protected $fillable = [
        'name', 'surname'
    ];

    public function slots()
    {
        return $this->embedsMany('App\Slot');
    }
}
