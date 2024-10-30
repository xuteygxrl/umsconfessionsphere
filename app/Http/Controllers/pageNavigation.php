<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageNavigation extends Controller
{
    public function home() {
        return view('system.umsconfessionsphere');
    }
    public function crushing() {
        return view('system.crushing-list');
    }
    public function general() {
        return view('system.general-list');
    }
    public function universityLife() {
        return view('system.university-life-list');
    }

    public function dashboard() {
        return view('system.umsconfessionsphere');
    }
}
