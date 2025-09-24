<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $user = Auth::user();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Log the logout
        Log::info('User logged out', [
            'id' => $user?->id,
            'name' => $user?->name
        ]);
    
        // Return appropriate response
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Logout successful']);
        }
    
        return redirect('/login')->with('success', 'Logout successful');
    }

}

