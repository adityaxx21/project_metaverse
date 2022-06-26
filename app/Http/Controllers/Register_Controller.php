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
    public function login_view(Request $request)
    {
        $data['tittle'] = "Welcome To MetaWorld";
        return view('authPage.login', $data);
    }

    public function registered_view(Request $request)
    {
        $data['tittle'] = "Welcome To MetaWorld";
        return view('authPage.register', $data);
    }

    public function login(Request $request)
    {
        $uname = $request->username_login;
        $password = $request->password_login;
        $get_data = user_reg::where('is_deleted', 1)->get();

        foreach ($get_data as $key => $value) {
            if ($value->username == $uname && $value->password == md5($password)) {
                echo($value->username);
                echo($value->password);
                echo($value->role);
                session(['username' => $value->username]);
                session(['name' => $value->name]);
                session(['gambar' => $value->picture]);
                session(['hak_akses' => $value->role]);
            }
            if ($value->role_id == 1) {
                return redirect('/adminpage');
            } elseif ($value->role_id == 2) {
                return redirect('/');
            }
        }
            // print_r($get_data);
        return redirect('/login');
    }

    public function registered(Request $request)
    {

        $uname = $request->username;
        $password = $request->password;
        $email = $request->email;
        $role = $request->role;
        $name = $request->name;
        $user = [
            'username' => $uname,
            'name' => $name,
            'password' => md5($password),
            'email' => $email,
            'role_id' => $role,
            'created_at' => date("Y-m-d H:i:s"),
        ];
        user_reg::create($user);
        if ($role == 1) {
            return redirect('/kelolaAkun')->with('alert-notif', 'Pendataran Berhasil');
        } elseif ($role == 2) {
            return redirect('/login')->with('alert-notif', 'Pendataran Berhasil');
        }
    }

    public function tambah_akun(Request $request)
    {

        $uname = $request->username_register;
        $password = $request->password_register;
        $email = $request->email_register;
        $user = [
            'username' => $uname,
            'password' => md5($password),
            'email' => $email,
            'role_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ];
        user_reg::create($user);
        return redirect('/login')->with('alert-notif', 'Pendataran Berhasil');
    }

    public function updateAccountAdmin(Request $request)
    {
        if (session()->get('username') == "") {
            return redirect('/login')->with('alert-notif', 'Anda Harus Login Terlebih Dahulu');
        }
        $id =  $request->id;
        $uname = $request->username_register;
        $password = $request->password_register;
        $email = $request->email_register;
        $name = $request->name_register;
        $user = [
            'username' => $uname,
            'email' => $email,
            'name' => $name,
            'updated_at' => date("Y-m-d H:i:s"),
        ];
        if ($password != null) {
            $user = array_merge($user, ['password' => md5($password)]);
        }

        user_reg::where('id', $id)->update($user);
        $is_account = user_reg::where('username', session()->get('username'))->value('role_id');
        if ($is_account == null) {
            $request->session()->flush();
            return redirect('/login')->with('alert-notif', 'Perubahan Akun Berhasil, Anda Harus Login terlebih dahulu');
        } else {
            return redirect('/kelolaAkun')->with('alert-notif', 'Perubahan Akun Berhasil');
        }
    }


    public function updateAccountUser(Request $request)
    {
        if (session()->get('username') == "") {
            return redirect('/login')->with('alert-notif', 'Anda Harus Login Terlebih Dahulu');
        }
        $id =  $request->id;
        $uname = $request->username_register;
        $password = $request->password_register;
        $email = $request->email_register;
        $name = $request->name_register;
        $user = [
            'username' => $uname,
            'email' => $email,
            'name' => $name,
            'updated_at' => date("Y-m-d H:i:s"),
        ];
        if ($password != null) {
            $user = array_merge($user, ['password' => md5($password)]);
        }
        try {
            $name_img =  $request->file('img_land')->getClientOriginalName();
        } catch (\Throwable $th) {
            $name_img = "";
        }
        if (!empty($name_img)) {
            $img_loc = "/storage/image/" . $this->location . "/";
            $img_save = "/public/image/" . $this->location . "/";

            $request->file('img_land')->storeAs($img_save, $name_img);
            $user = array_merge($user, array('image' =>  $img_loc . $name_img));
        }
        user_reg::where('id', $id)->update($user);
        $is_account = user_reg::where('username', session()->get('username'))->value('role_id');
        if ($is_account == null) {
            $request->session()->flush();
            return redirect('/login')->with('alert-notif', 'Perubahan Akun Berhasil, Anda Harus Login terlebih dahulu');
        } else {
            return redirect('/dunno')->with('alert-notif', 'Perubahan Akun Berhasil');
        }
    }

    public function getData($id)
    {
        $data['data'] = user_reg::where([['is_deleted', 1], ['id', $id]])->first();
        return Response()->json($data);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect('/login');
    }

    public function delete_account(Request $request)
    {
        $id = $request->id_data;
        // echo($id);
        user_reg::where('id', $id)->update(['is_deleted' => 0]);
        return Redirect('/kelolaAkun');
    }

    public function kelola_akun(Request $request)
    {
        $page = 4;
        $data['Page'] = "Kelola Akun";
        $data['user'] = user_reg::where('is_deleted', 1)->paginate($page);
        $data['get_total'] = user_reg::where('is_deleted', 1)->count();
        $data['page_now'] = $request->page;
        $data['search'] = $request->page;
        $round = ceil($data['get_total'] / $page);
        $data['pagin'] = $round;
        return view('adminpage.kelolaAkun', $data);
    }
}
