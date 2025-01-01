<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBanController extends Controller
{
    //View Ban List
    public function banView()
    {
        $admin = Auth::guard('admin')->user();
        $confession = Confession::all();
        $user = User::where('isBan', '!=', NULL)
                    ->paginate(10); // Paginate the reports, 10 per page
        // dd($report);
    
        return view('admin.banUser', ['admin' => $admin, 'confession' => $confession, 'user' => $user]);
    }

    public function banUser()
    {
        $admin = Auth::guard('admin')->user();
        $confession = Confession::all();
        $user = User::where('isBan', '!=', NULL)
                    ->paginate(10); // Paginate the reports, 10 per page
        // dd($report);
    
        return view('admin.banUser', ['admin' => $admin, 'confession' => $confession, 'user' => $user]);
    }
}
