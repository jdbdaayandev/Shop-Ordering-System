<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($user)){
            $request->session()->regenerate();

            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'error' => 'Invalid email or password.',
        ])->withInput();

    }
    public function show_register()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 3
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect('/');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function logout(Request $request)
    {
        Auth::logout(); $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
