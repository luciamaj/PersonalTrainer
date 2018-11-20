<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    public function index() {

        $users = DB::collection('trainers_collection')->get();
        return $users;
    }
}
