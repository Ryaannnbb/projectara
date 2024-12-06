<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $customMessages = [
            'email.required' => 'email harus diisi.',
            'email.email' => 'email sudah ada.',
            'password.required' => 'passowrd harus diisi.',
        ];


        $validator = Validator::make($request->all(), $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return redirect()->back()->withInput($request->except('password'))->withErrors(['email' => 'Email ini belum terdaftar, silahkan gunakan email yang tersedia.']);
        }


        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            if (auth()->user()->role == 'user') {
                return redirect()->route('list_barang_user')->with('success_login', 'Anda berhasil masuk.');
            } else if (auth()->user()->role == 'admin') {
                return redirect()->route('kategori')->with('success_login', 'Anda berhasil masuk.');
            } else {
                return redirect()->route('login')->with('error', 'Email atau password salah.');
            }
        }

        return redirect()->back()->withInput($request->except('password'))->withErrors(['password' => 'Email atau password yang Anda masukkan salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success_login', 'Berhasil keluar');
    }
}
