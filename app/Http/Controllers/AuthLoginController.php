<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // 登入成功，導向至其他頁面
            return redirect()->intended('/');
        }

        // 登入失敗，重新導向至登入頁面並顯示錯誤訊息
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}
