<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('auth.login');
    }

    public function forgot_password()
    {
        return view('auth.forgot-password');
    }


    public function login_proses(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6',
            'hp'       => 'required|string',
        ]);


        $user = User::create([
            'nama'  => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'hp'       => $request->hp,
            'status' => $request->status, //set status sesuai kebutuhan (true/false)

        ]);

        Auth::login($user);

        return redirect()->route('admin.dashboard')->with('success', 'Registrasi berhasil dan Anda sudah login.');

    }
}
