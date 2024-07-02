<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Register Successfully');
    }

    public function showRegisterForm()
    {
        return view('admin.login.register');
    }

    public function showLoginForm()
    {
        return view('admin.login.index');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            $request->session()->regenerate();
            return redirect('/home')->with('success', 'Login Successfully');
        }
        return back()->with('error', 'Kamu Bloon Email sama Password aja lupa');
    }


}
