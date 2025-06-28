<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // Validate the request data
        $attrs = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt login
        if (!Auth::attempt($attrs)) {
            throw ValidationException::withMessages([
                // 'email' => 'Your provided credentials could not be verified.'
                'email' => 'بريد إلكتروني غير صالح',
                'password' => 'كلمة المرور غير صالحة'
            ]);
        }

        // Regenerate session token for security
        request()->session()->regenerate();

        // Retrieve the user's role
        $role = auth()->user()->role->name ?? null;

        // Redirect based on role
        switch ($role) {
            case 'Admin':
                return redirect('/admin/dashboard')->with('greeting', 'مرحباً بك  أيها المدير!');
            case 'Student':
                return redirect('/student/dashboard')->with('greeting', 'مرحباً بك  أيها الطالب!');
            case 'Teacher':
                return redirect('/teacher/dashboard')->with('greeting', 'مرحباً بك  أيها المعلم!');
            default:
                // Handle if the user doesn't have a role
                auth()->logout();
                return redirect('/')->withErrors([
                    'role' => 'المستخدم ليس لديه دور صالح.'
                ]);
        }
    }

    public function destroy()
    {
        // logout functionality
        auth()->logout();
        // invalidate the user
        request()->session()->invalidate();
        // regenerte the CSRF token
        request()->session()->regenerateToken();
        // redirect to the login page
        return redirect('/');
    }
}
