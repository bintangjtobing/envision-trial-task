<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function proseslogin(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;

        // $check = DB::table('users')
        //     ->where('email', $email)
        //     ->first();
        // Auth::attempt(['email' => $email, 'password' => $password]);

        // if (Auth::check()) {
        //     return redirect('/');
        // }

        // if ($check && HASH::check($password, $check->password)) {
        //     $check->isLogin = 'login';
        //     $check = (array)$check;
        //     session($check);

        //     return redirect('/');
        //     // return 'true';
        // }
        // return back()->with('failed', ' Please check your auth status or your input!');
        // dd($request->all());

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        }
        return back()->with('failed', ' Please check your auth status or your input!');

    }
}
