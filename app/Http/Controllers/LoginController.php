<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $validatedData = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Wajib diisi',
                'email.email' => 'Mohon isi dengan format e-mail yang valid',
                'password.required' => 'Wajib diisi',
            ]
        );

        if (Auth::attempt($request->only('email', 'password')) && Auth::user()->level == 'admin') {
            return redirect('/dashboard');
        } else if (Auth::attempt($request->only('email', 'password')) && Auth::user()->level == 'siswa') {
            return redirect('/');
        } else {
            return redirect('/login')->with('message', 'E-mail atau password salah');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|email|unique:students,email',
                'password' => 'required',
            ],
            [
                'nama.required' => 'Wajib diisi',
                'email.required' => 'Wajib diisi',
                'email.email' => 'Mohon isi dengan format e-mail yang valid',
                'email.unique' => 'Email sudah digunakan untuk pendaftaran',
                'password.required' => 'Wajib diisi',
            ]
        );

        User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'level' => 'siswa',
            'password' => bcrypt($request->input('password')),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login')->with('sukses', 'Berhasil Membuat Akun!');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
