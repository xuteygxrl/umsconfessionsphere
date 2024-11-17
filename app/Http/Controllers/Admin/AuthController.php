<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Admin;
use App\models\Confession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.login')->withErrors(['login_error' => 'Invalid credentials.']);
    }

    // Admin Dashboard
    public function dashboard()
    {
        $admin = Auth::guard('admin')->user();
        $confession = Confession::where('status','p')->get();

        // Pass the admin data to the view, including the ID and confession data
        return view('admin.dashboard', ['admin' => $admin, 'confession' => $confession]);
    }

    // Handle logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
