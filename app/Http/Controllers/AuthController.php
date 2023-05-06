<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post')) {
            $user = User::where(['email' => $request->email, 'is_active' => 1])->first();
            if(!$user) {
                return redirect()->back()->withInput()->with('email_error', 'Email tidak ditemukan atau nonaktif');
            }
            if(!\Hash::check($request->password, $user->password)) {
                return redirect()->back()->withInput()->with('password_error', 'Password tidak tepat');
            }

            \Auth::loginUsingId($user->id, $remember = ($request->remember == 1));

            return redirect()->to(route('monitoring-pdp.index'));
        }
        return view('pages.auth.login');
    }

    public function forgotPassword()
    {
        return view('pages.auth.forgot-password');
    }

    public function forgotPasswordPost(Request $request)
    {
        //
    }

    public function logout(Request $request)
    {
        \Auth::logout();
        \Session::flush();

        return redirect()->to(route('login'));
    }
    
    public function generateUserDummy(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);
    }
}
