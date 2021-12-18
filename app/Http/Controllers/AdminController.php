<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Auth;

class AdminController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('idUser');
        $permission = $request->session()->get('idgroup');
        if($user != null && $permission == 1){
            return redirect('/admin/loaitin');
        }else if($user != null && $permission == 0){
            return redirect('/');
        }else{
            return view('Admin.login');
        }
    }

    public function login(Request $req){
        $req->validate([
            'email' => 'required|email:rfc,dns',
            'pass' => 'required|min:8|max:30'
        ],[
            'email.required' => 'Vui lòng nhập email',
            'pass.required' => 'Vui lòng nhập mật khẩu',
            'pass.min' => 'Vui lòng nhập mật khẩu lớn hơn 8 ký tự',
            'pass.max' => 'Vui lòng nhập mật khẩu bé hơn 30 ký tự'
        ]);

        $email = $req->email;
        $password = md5($req->pass);
        $user = UsersModel::where('email',$email)->where('password',$password)->first();
        if($user != null){
            $req->session()->put('email',$user->email);
            $req->session()->put('idUser',$user->idUser);
            $req->session()->put('username',$user->username);
            $req->session()->put('ngay',$user->ngay);
            $req->session()->put('idgroup',$user->idgroup);
            if($user->idgroup == 1) {
                return redirect('admin/loaitin');
            }else{
                return redirect('/');
            }
        }else{
            $errors = 'Sai tài khoản hoặc mật khẩu';
            return redirect('/admin')->withErrors($errors, 'errors');
        }
    }

    public function logout(Request $req){
        $req->session()->flush();
        return redirect('/admin');
    }
}