@extends ('Admin.layoutsad.layout')
@section ('content')
     <h2 class="text-center my-2">Loại tin</h2>
     <a class="btn btn-primary m-2 px-4" href="/admin/loaitin/add" role="button">Thêm mới</a>
     <a class="btn btn-primary m-2 px-4" href="/admin/loaitin" role="button">Tiếng Việt</a>
     <a class="btn btn-primary m-2 px-4" href="/admin/loaitin/En" role="button">English</a>
     <table class="table">
          <tr>
               <th>ID</th>
               <th>Tên loại</th>
               <th>Ngôn ngữ</th>
               <th>Ẩn hiện</th>
               <th>Tên thể loại</th>
               <th></th>
          </tr>
          @foreach ($getlist as $r)
               <?php
                    if($r->AnHien == '1'){
                         $anhien = 'Hiện';
                    }else{
                         $anhien = 'Ẩn';
                    }

                    if($r->lang == 'vi'){
                         $lang = 'Tiếng Việt';
                    }else{
                         $lang = 'English';
                    }
               ?>
               <tr>
                    <td>{{$r->idLT}}</td>
                    <td>{{$r->Ten}}</td>
                    <td>{{$lang}}</td>
                    <td>{{$anhien}}</td>
                    <td>{{$r->theloai->TenTL}}</td>
                    <td>
                         <a class="btn btn-primary" href="/admin/loaitin/edit/{{$r->idLT}}" role="button">Sửa</a>
                         <a class="btn btn-primary" href="/admin/loaitin/delete/{{$r->idLT}}" onclick="return confirm('bạn có chắc muốn xóa loại tin này?')" role="button">Xóa</a>
                    </td>
               </tr>
          @endforeach
     </table>
     {{$getlist->links()}}
@endsection