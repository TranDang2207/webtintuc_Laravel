<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tin;
use App\Models\loaitin;
use Illuminate\Http\Request;

class TinController extends Controller
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
            $getlistTin = tin::where('AnHien',1)->search()->orderby('idTin','desc')->paginate(15);
            return view('Admin.tintuc.index', ['getTin' => $getlistTin]);
        }else if($user != null && $permission == 0){
            return redirect('/');
        }else{
            return redirect('/admin');
        }
    }

    public function private()
    {
        $getlistTin = tin::where('AnHien',0)->search()->orderby('idTin','desc')->paginate(15);
        $getlistTin->withPath('/admin/tintuc/private');
        return view('Admin.tintuc.index', ['getTin' => $getlistTin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaitin = loaitin::All();
        return view('Admin.tintuc.add',['loaitin' => $loaitin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tin  $tin
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $request->validate([
            'TieuDe' => 'required|unique:tin',
            'TomTat' => 'required',
            'Content' => 'required|min:100',
            'img' => 'required'
        ],[
            'TieuDe.required' => 'Vui lòng nhập tiêu đề',
            'TieuDe.unique' => 'Tiêu đề đã tồn tại',
            'TomTat.required' => 'Vui lòng nhập tóm tắt',
            'Content.required' => 'Vui lòng nhập nội dung',
            'Content.min' => 'Nội dung quá ngắn yêu cầu trên 100 từ',
            'img.required' => 'Vui lòng chọn ảnh cho tin'
        ]);
        if($request->has('img')){
            $file = $request->img;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload/images'), $file_name);
        }

        $request->merge(['urlHinh' => "upload/images/".$file_name]);
        if(tin::create($request->all())){
            return redirect('/admin/tintuc')->with('success','Đăng bài thành công');
        }
    }

    public function edit($id){
        $loaitin = loaitin::all();
        $tinchitiet = tin::find($id);
        return view('Admin.tintuc.edit',['loaitin' => $loaitin,'tinchitiet' => $tinchitiet]);
    }

    public function update(Request $request)
    {
        
        $request->validate([
            'TieuDe' => 'required',
            'TomTat' => 'required',
            'Content' => 'required|min:100',
        ],[
            'TieuDe.required' => 'Vui lòng nhập tiêu đề',
            'TomTat.required' => 'Vui lòng nhập tóm tắt',
            'Content.required' => 'Vui lòng nhập nội dung',
            'Content.min' => 'Nội dung quá ngắn yêu cầu trên 100 từ',
        ]);
        if($request->has('img')){
            $file = $request->img;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload/images'), $file_name);
            $request->merge(['urlHinh' => "upload/images/".$file_name]);
        }else{
            $request->merge(['urlHinh' => "upload/images/".$request->image]);
        }
        
        $TieuDe = $request->TieuDe;
        $id = $request->idTin;
        $urlHinh = $request->urlHinh;
        $TomTat = $request->TomTat;
        $idLT = $request->idLT;
        $lang = $request->lang;
        $Noibat = $request->NoiBat;
        $AnHien = $request->AnHien;
        $tag = $request->tags;
        $Content = $request->Content;
        $tin = tin::find($id);
        $tin->TieuDe = $TieuDe;
        $tin->urlHinh = $urlHinh;
        $tin->TomTat = $TomTat;
        $tin->idLT = $idLT;
        $tin->lang = $lang;
        $tin->NoiBat = $Noibat;
        $tin->AnHien = $AnHien;
        $tin->tags = $tag;
        $tin->Content = $Content;
        $tin->update();
        return redirect('admin/tintuc');
    }

    public function delete($id)
    {
        $tin = tin::find($id);
        $tin->delete();
        return redirect('/admin/tintuc');
    }
}