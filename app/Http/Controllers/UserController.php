<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tin;
use App\Models\theloai;
use App\Models\loaitin;
use App\Models\comment;
use App\Models\UsersModel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $getNewsLatest = tin::where('AnHien',1)->where('NoiBat',1)->where('urlHinh','!=','')->orderby('Ngay','desc')->limit(4)->get();
        $getNewsMostWatched = tin::where('AnHien',1)->where('NoiBat',1)->where('urlHinh','!=','')->orderby('SoLanXem','desc')->limit(5)->get();
        $getlistTL = theloai::where('AnHien',1)->orderby('idTL','asc')->get();
        // return view('test', compact('getlistTL'));
        return view('index', ['getTin' => $getNewsLatest,'getTin2' => $getNewsMostWatched,'getlistTL' => $getlistTL]);
    }

    public function test()
    {   
        $getNewsLatest = tin::where('AnHien',1)->where('NoiBat',1)->where('urlHinh','!=','')->orderby('Ngay','desc')->limit(4)->get();
        $getlistTL = theloai::where('AnHien',1)->orderby('idTL','asc')->get();
        return view('test', compact('getlistTL'));
    }

    public function chitiettin($id)
    {
        $tin = tin::find($id);
        $tintheoTL = tin::where('idTin','!=',$id)->where('idLT',$tin->idLT)->limit(2)->get();
        $tinkhacTL = tin::where('idTin','!=',$id)->where('idTL','!=',$tin->idTL)->limit(2)->get();
        $comments = comment::where('idTin',$id)->orderby('Ngay','desc')->get();
        return view('chitiettin', compact('tin','tintheoTL','tinkhacTL','comments'));
    }

    public function deleteCMT($idCmt)
    {
        $t = comment::find($idCmt);
        $t->delete();
        return redirect()->back();
    }

    public function insertCmt(Request $request)
    {
        if(comment::create($request->all())){
            return redirect()->back();
        }
    }

    public function UserAndCmt(Request $request)
    {
        $request->validate([
            'username' => 'unique:users|required|max:32',
            'email' => 'unique:users|required|email',
            'password' => 'required|min:8|max:16',
            'repassword' => 'required|same:password'
        ],[
            'username.unique' => 'Tên tài khoản đã tồn tại',
            'username.required' => 'Vui lòng nhập tên tài khoản',
            'username.max' => 'Tên tài khoản vượt quá ký tự giới hạn(32)',
            'email.unique' => 'Email đã được sử dụng',
            'email.required' => 'Vui lòng nhập Email',
            'email.email' => 'Email không đúng dạng',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'password quá ngắn(8)',
            'password.max' => 'password quá dài(16)',
            'repassword.required' => 'Vui lòng xác nhận lại password',
            'repassword.same' => 'Password không trùng khớp'
        ]);

        $request->merge(['password' => md5($request->password)]);
        $request->merge(['idgroup' => 0]);
        $idUser = UsersModel::create($request->all())->id;
        if($idUser){
            $request->session()->put('email',$request->email);
            $request->session()->put('idUser',$idUser);
            $request->session()->put('username',$request->username);
            $request->session()->put('ngay',$request->ngay);
            $request->session()->put('idgroup',$request->idgroup);
            $cmt = new comment();
            $cmt->NoiDung = $request->NoiDung;
            $cmt->idTin = $request->idTin;
            $cmt->idUser = $idUser;
            if($cmt->save()){
                return redirect()->back();
            }
        }
    }

    public function lienhe()
    {
        return view('lienhe');
    }

    public function gioithieu()
    {
        return view('gioithieu');
    }

    public function login()
    {
        return redirect('/admin');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');   
    }

    public function register(Request $request)
    {
        return view('Admin.register');
    }

    public function xulyRegister(Request $request){
        $request->validate([
            'username' => 'unique:users|required|max:32',
            'email' => 'unique:users|required|email',
            'password' => 'required|min:8|max:16',
            'repass' => 'required|same:password'
        ],[
            'username.unique' => 'Tên tài khoản đã tồn tại',
            'username.required' => 'Vui lòng nhập tên tài khoản',
            'username.max' => 'Tên tài khoản vượt quá ký tự giới hạn(32)',
            'email.unique' => 'Email đã được sử dụng',
            'email.required' => 'Vui lòng nhập Email',
            'email.email' => 'Email không đúng dạng',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'password quá ngắn(8)',
            'password.max' => 'password quá dài(16)',
            'repass.required' => 'Vui lòng xác nhận lại password',
            'repass.same' => 'Password không trùng khớp'
        ]);

        $request->merge(['password' => md5($request->password)]);
        $request->merge(['idgroup' => 0]);
        $idUser = UsersModel::create($request->all())->id;
        if($idUser){
            return redirect(url('/admin'))->with('success','Tạo tài khoản thành công');
        }
    }

    public function search()
    {
        $tin = tin::search()->paginate(12);
        $key = request()->search;
        return view('search', compact('tin','key'));
    }

    public function quenpass()
    {
        return view('quenpass');
    }

    public function resetpass(Request $request)
    {
        $request->validate([
            'email' => 'email|required|exists:users,email',
        ],[
            'email.email' => 'Email không đúng dạng',
            'email.required' => 'Vui lòng nhập email',
            'email.exists' => 'Email chưa đăng ký',
        ]);
        $request->merge(['password' => substr(md5(random_int(0, 9999)), 0, 8)]);
        $u = UsersModel::where('email',$request->email)->first();
        $u->password = md5($request->password);
        $u->update();
        $data = $request->all();
        $email['to'] = $request->email;
        \Mail::send('mails.Sendmail',['data' => $data],function($message) use ($email){
            $message->from('dangttps14566@fpt.edu.vn','USNews');

            $message->to($email['to']);
            $message->subject('Reset password');
        });
    }
}