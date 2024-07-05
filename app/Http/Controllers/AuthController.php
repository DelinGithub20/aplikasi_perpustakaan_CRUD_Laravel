<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller

 {
        // Method to show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Method to handle login
    public function loginProcess(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Custom logic to authenticate user
        if ($credentials['email'] === 'admin@example.com' && $credentials['password'] === '123') {
            // Authentication successful, redirect to home or dashboard
            return redirect('/home');
        }

        // Authentication failed, redirect back with error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Method to handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
 }
