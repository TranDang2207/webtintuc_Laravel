<?php

namespace App\Http\Controllers;

use App\Models\theloai;
use Illuminate\Http\Request;

class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){
        $user = $request->session()->get('idUser');
        $permission = $request->session()->get('idgroup');
        if($user != null && $permission == 1){
            $getlistTL = theloai::all();
            return view('Admin/theloai/index', ['getlist' => $getlistTL]);
        }else if($user != null && $permission == 0){
            return redirect('/');
        }else{
            return redirect('/admin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/theloai/add');
    }

    public function insert(Request $req){
        $req->validate([
            'TenTL' => 'required|max:40'
        ],[
            'TenTL.required' => 'Vui lòng nhập tên thể loại',
            'TenTL.max' => 'Tên thể loại không được quá 40 ký tự'
        ]);

        $name = $req->TenTL;
        $lang = $req->inlineRadioOptions;
        $anhien = $req->inlineRadioOptions2;
        $menu = $req->inlineRadioOptions3;
        $tl = new theloai();
        $tl->TenTL = $name;
        $tl->lang = $lang;
        $tl->AnHien = $anhien;
        $tl->HienMenu = $menu;
        $tl->save();
        return redirect('admin/theloai');
    }

    public function edit($id){
        $getTL = theloai::find($id);
        return view('Admin/theloai/edit',['getTL' => $getTL]);
    }

    public function update(Request $req){
        $name = $req->TenTL;
        $lang = $req->inlineRadioOptions;
        $anhien = $req->inlineRadioOptions2;
        $menu = $req->inlineRadioOptions3;
        $id = $req->id;
        $tl = theloai::find($id);
        $tl->TenTL = $name;
        $tl->lang = $lang;
        $tl->AnHien = $anhien;
        $tl->HienMenu = $menu;
        $tl->save();
        return redirect('admin/theloai');
    }

    public function delete($id){
        $tl = theloai::find($id);
        $tl->delete();
        return redirect('admin/theloai');
    }
}
