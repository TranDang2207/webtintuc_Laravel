@extends ('Admin.layoutsad.layout')
@section ('content')
    <h2 class="text-center my-2">Thành viên</h2>
    <a class="btn btn-primary m-2 px-4" href="/admin/taikhoan/add" role="button">Thêm mới</a>
    <table class="table">
          <tr>
               <th>ID</th>
               <th>Username</th>
               <th>Email</th>
               <th>Ngày tạo</th>
               <th>Quyền hạn</th>
               <th></th>
          </tr>
          @foreach ($getlist as $r)
               <?php
                    if($r->idgroup == '0'){
                         $lang = 'User';
                    }else{
                         $lang = 'Admin';
                    }
               ?>
               <tr>
                    <td>{{$r->idUser}}</td>
                    <td>{{$r->username}}</td>
                    <td>{{$r->email}}</td>
                    <td><?= date('d/m/Y', strtotime($r->ngay)) ?></td>
                    <td>{{$lang}}</td>
                    <td>
                         <a class="btn btn-primary" href="/admin/taikhoan/edit/{{$r->idUser}}" role="button">Sửa</a>
                         <a class="btn btn-primary" href="/admin/taikhoan/delete/{{$r->idUser}}" onclick="return confirm('Bạn có chắc muốn xóa thành viên này?')" role="button">Xóa</a>
                    </td>
               </tr>
          @endforeach
     </table>
@endsection