<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use App\Slot;

class SlotController extends Controller
{
    public function store(Request $request)
    {
        $slot = new Slot(['title' => $request->get('title')]);
        $trainer = Trainer::first();
        $slot = $trainer->slots()->save($slot);
        return $slot;
    }
}
