<?php

namespace App\Http\Controllers;

use App\models\Confession;
use Illuminate\Http\Request;

class pageNavigation extends Controller
{
    public function home() {
        return view('system.umsconfessionsphere');
    }
    public function crushing() {
        $confession = Confession::where('status','a')
                                ->where('confessionCategoryId',2)
                                ->where('isDeleted','!=',1)
                                ->get();

        return view('system.crushing-list',['confession' => $confession]);
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
