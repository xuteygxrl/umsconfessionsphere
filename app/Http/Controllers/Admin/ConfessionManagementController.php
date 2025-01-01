<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfessionManagementController extends Controller
{
    public function userManagement()
    {
        $admin = Auth::guard('admin')->user();
        $confession = Confession::all();
        $user = User::all()
                    ->paginate(10); // Paginate the reports, 10 per page
        // dd($report);
    
        return view('admin.userManagement', ['admin' => $admin, 'confession' => $confession, 'user' => $user]);
    }
}
