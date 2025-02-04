<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        return view('team');
    }

    public function detail () {
        return view('team-detail');
    }
}
