<?php

namespace App\Http\Controllers;

use App\Models\user_reg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Register_Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['tittle'] = "Welcome To XXX";
        return view('authPage.auth', $data);
    }

    public function login(Request $request)
    {
        $uname = $request->username_login;
        $password = $request->password_login;
        $get_data = user_reg::get();
        foreach ($get_data as $key => $value) {
            if ($value->username == $uname && $value->password == md5($password)) {
                session(['username' => $value->username]);
                session(['name' => $value->name]);
                session(['gambar' => $value->picture]);
                session(['hak_akses' => $value->role]);
                return redirect('/');
                }
        }
        return redirect('/auth');
    }

    public function registered(Request $request)
    {
        $uname = $request->username_register;
        $password = $request->password_register;
        $email = $request->email_register;
        $user = [
            'username' => $uname,
            'password' => md5($password),
            'email' => $email,
        ];
        user_reg::insert($user);
        return redirect('/auth')->with('alert-notif', 'Pendataran Berhasil');
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}
