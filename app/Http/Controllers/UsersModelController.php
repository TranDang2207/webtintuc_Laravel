<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getlistUsers = UsersModel::all();
        return view('Admin/thanhvien/index',['getlist' => $getlistUsers]);
    }

    public function edit($id){
        $getUserEdit = UsersModel::find($id);
        return view('Admin/thanhvien/edit',['getUser' => $getUserEdit]);
    }

    public function create(){
        return view('Admin/thanhvien/add');
    }

    public function insert(Request $req){
        $req->validate([
            'username' => 'required|min:6|max:14|unique:users',
            'pass' => 'required|min:8',
            'repass' => 'required|same:pass',
            'email' => 'required|email|unique:users'
        ],[
            'username.required' => 'Vui lòng nhập username',
            'username.min' => 'Username phải lớn hơn 6 ký tự',
            'username.max' => 'Username phải bé hơn 14 ký tự',
            'username.unique' => 'Username đã tồn tại',
            'pass.required' => 'Vui lòng nhập password',
            'pass.min' => 'Password phải lớn hơn 8 ký tự',
            'repass.required' => 'Vui lòng xác nhận lại password',
            'repass.same' => 'Password không trùng khớp',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng dạng',
            'email.unique' => 'Email đã tồn tại'
        ]);
        $name = $req->username;
        $pass = bcrypt($req->pass);
        $email = $req->email;
        $permission = $req->inlineRadioOptions;
        $tv = new UsersModel();
        $tv->username = $name;
        $tv->password = $pass;
        $tv->email = $email;
        $tv->idgroup = $permission;
        $tv->save();
        return redirect('admin/taikhoan');
    }

    public function update(Request $req){
        $permission = $req->inlineRadioOptions;
        $id = $req->txtMa;
        $tv = UsersModel::find($id);
        $tv->idgroup = $permission;
        $tv->save();
        return redirect('admin/taikhoan');
    }

    public function delete($id){
        $tv = UsersModel::find($id);
        $tv->delete();
        return redirect('admin/taikhoan');
    }
}
