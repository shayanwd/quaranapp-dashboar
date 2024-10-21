<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login() {
        // Redirect to dashboard if user is already authenticated
        if (Auth::check()) {
            return redirect()->intended('/dashboard');
        }
        return view('login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function dashboard() {
        return $this->viewWithUser('dashboard');
    }

    public function appUsers() {
        return $this->viewWithUser('appUsers');
    }

    public function azkar() {
        return $this->viewWithUser('azkar');
    }

    public function settings() {
        $user = auth()->user();
        return view('settings', ['user' => $user]);
    }

    public function viewWithUser($view) {
        $user = auth()->user();
        return view($view, ['user' => $user]);
    } 
}
