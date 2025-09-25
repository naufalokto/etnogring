<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'regex:/^[A-Za-z0-9_]+$/'],
            'password' => 'required|string'
        ], [
            'name.required' => 'Username is required.',
            'name.regex' => 'Invalid name format.',
            'password.required' => 'Password is required.'
        ]);

        $user = User::where('name', $request->name)->first();

        if (!$user) {
            Log::info('Login failed: name not found', ['name' => $request->name]);
            return back()->withErrors(['name' => 'Invalid name or password'])->withInput();
        }

        if (!Hash::check($request->password, $user->password)) {
            Log::info('Login failed: incorrect password', ['username' => $request->username]);
            return back()->withErrors(['name' => 'Invalid name or password'])->withInput();
        }

        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();

        return redirect()->intended('/galeri-budaya-insert');
    }

    public function showLoginForm()
    {
        return view('loginadmin');
    }
}
