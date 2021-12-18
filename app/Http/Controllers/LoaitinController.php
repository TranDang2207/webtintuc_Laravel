<?php

namespace App\Http\Controllers;

use App\Models\loaitin;
use App\Models\theloai;
use Illuminate\Http\Request;

class LoaitinController extends Controller
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
            $getlist = loaitin::where('lang','vi')->orderby('idLT')->paginate(10);
            return view('admin/loaitin/index', ['getlist' => $getlist]);
        }else if($user != null && $permission == 0){
            return redirect('/');
        }else{
            return redirect('/admin');
        }
    }

    public function indexEn()
    {
        $getlist = loaitin::where('lang','en')->orderby('idLT')->paginate(10);
        return view('/admin/loaitin/index',['getlist'=>$getlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getTL = theloai::all();
        return view('Admin.loaitin.add', ['getTL' => $getTL]);
    }

    public function insert(Request $req)
    {
        $req->validate([
            'tenloai' => 'required|max:50',
        ],[
            'tenloai.required' => 'Vui lòng nhập tên loại',
            'tenloai.max255' => 'Tên loại không vượt quá 50 ký tự'
        ]);

        $name = $req->tenloai;
        $idTL = $req->tenTL;
        $lang = $req->inlineRadioOptions;
        $anhien = $req->inlineRadioOptions2;
        $lt = new loaitin();
        $lt->Ten = $name;
        $lt->idTL = $idTL;
        $lt->lang = $lang;
        $lt->AnHien = $anhien;
        $lt->save();
        return redirect('admin/loaitin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit($id){
        $getLT = loaitin::find($id);
        $getTL = theloai::all();
        return view('Admin.loaitin.edit', ['getLT' => $getLT], ['getTL' => $getTL]);
    }

    public function update(Request $req){
        $name = $req->tenloai;
        $idTL = $req->tenTL;
        $lang = $req->inlineRadioOptions;
        $anhien = $req->inlineRadioOptions2;
        $id = $req->id;
        $lt = loaitin::find($id);
        $lt->Ten = $name;
        $lt->idTL = $idTL;
        $lt->lang = $lang;
        $lt->AnHien = $anhien;
        $lt->save();
        return redirect('admin/loaitin');
    }

    public function delete($id){
        $lt = loaitin::find($id);
        $lt->delete();
        return redirect('admin/loaitin');
    }
}
