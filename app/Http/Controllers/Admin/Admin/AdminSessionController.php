<?php

namespace App\Http\Controllers\Admin\Admin;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class AdminSessionController extends Controller
{
    /**
     * Display the login form or redirect if already authenticated.
     */
    public function createadmin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.admin'); // Admin dashboard route
        } elseif (Auth::check()) {
            return redirect()->route('dashboard'); // User dashboard route
        }

        return view('admin.auth.login'); // Show the login view
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $checkAdmin = Admin::where('email', $request->email)->first();

    //     if (!$checkAdmin) {
    //         return back()->with('warning', 'Invalid credentials!');
    //     }

    //     if (Auth::guard('admin')->attempt([
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ], $request->filled('remember'))) {
    //         $request->session()->regenerate(); // Regenerate session to prevent fixation
    //         return redirect()->intended('admin')->with('success', 'Logged in successfully!');
    //     }

    //     return back()->with('warning', 'Invalid credentials!');
    // }

    public function store(LoginRequest $request)
    {


        // return "ok";

       if (! Auth::guard('web')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // RateLimiter::hit($request->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);

            // return "ok";
        }
        return "ok";
        // return redirect()->route('admin.create');
    }


    // public function authenticate()
    // {

    //     return "abc";

    //     // if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
    //     //     RateLimiter::hit($this->throttleKey());

    //     //     throw ValidationException::withMessages([
    //     //         'email' => trans('auth.failed'),
    //     //     ]);
    //     // }

    //     // RateLimiter::clear($this->throttleKey());
    // }


    /**
     * Log out the authenticated admin.
     */
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
