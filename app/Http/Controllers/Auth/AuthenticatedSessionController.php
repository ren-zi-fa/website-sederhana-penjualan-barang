<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
    
        $role = $request->input('role');
       
        if (Auth::user()->hasRole('admin')) {
            return redirect()->to('dashboard/kelolaproducts');
        } elseif ($role === 'penjual' && Auth::user()->hasRole('penjual')) {
            return redirect()->to('dashboard/kelolaproducts')->with('login-success','selamat datang');
        } elseif ($role === 'pembeli' && Auth::user()->hasRole('pembeli')) {
            return redirect()->to('product')->with('login-success','selamat datang');
        } else {
            Auth::logout(); 
            return redirect('/login')->with('error', 'role yang anda pilih salah');
        }
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
