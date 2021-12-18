@extends ('Admin.layoutsad.layout')
@section ('content')
     <h2 class="text-center my-2">Thể loại</h2>
     <a class="btn btn-primary m-2 px-4" href="/admin/theloai/add" role="button">Thêm mới</a>
     <table class="table">
          <tr>
               <th>ID</th>
               <th>Tên thể loại</th>
               <th>Ngôn ngữ</th>
               <th>Ẩn hiện</th>
               <th>Hiện menu</th>
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

                    if($r->HienMenu == '1'){
                         $menu = 'Có';
                    }else{
                         $menu = 'Không';
                    }
               ?>
               <tr>
                    <td>{{$r->idTL}}</td>
                    <td>{{$r->TenTL}}</td>
                    <td>{{$lang}}</td>
                    <td>{{$anhien}}</td>
                    <td>{{$menu}}</td>
                    <td>
                         <a class="btn btn-primary" href="/admin/theloai/edit/{{$r->idTL}}" role="button">Sửa</a>
                         <a class="btn btn-primary" href="/admin/theloai/delete/{{$r->idTL}}" onclick="return confirm('Bạn có chắc muốn xóa thể loại này?')" role="button">Xóa</a>
                    </td>
               </tr>
          @endforeach
     </table>
@endsection