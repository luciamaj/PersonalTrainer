<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    public function indexUsers() {
        $users = DB::collection('users_collection')->get();
        return $users;
    }
}
