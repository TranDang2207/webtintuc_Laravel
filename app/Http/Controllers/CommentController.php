<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
            $getlistCMT = comment::orderby('Ngay','desc')->paginate(5);
            return view('Admin.comment.index', ['getlist' => $getlistCMT]);
        }else if($user != null && $permission == 0){
            return redirect('/');
        }else{
            return redirect('/admin');
        }
    }

    public function delete($id){
        $bl = comment::find($id);
        $bl->delete();
        return redirect('admin/binhluan');
    }
}
