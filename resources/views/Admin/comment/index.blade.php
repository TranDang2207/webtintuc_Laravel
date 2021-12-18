@extends ('Admin.layoutsad.layout')
@section ('content')
     <h2 class="text-center my-2">Bình luận</h2>
     <table class="table table-bordered">
          <tr>
               <th>ID</th>
               <th>Tin tức</th>
               <th>Nội dung</th>
               <th>Username</th>
               <th>Email</th>
               <th>Ngày</th>
               <th></th>
          </tr>
          @foreach ($getlist as $r)
               <tr>
                    <td class="col-0">{{$r->idYKien}}</td>
                    <td>{{$r->tin->TieuDe}}</td>
                    <td class="col-3">{{$r->NoiDung}}</td>
                    <td class="col-1">{{$r->user->username}}</td>
                    <td>{{$r->user->email}}</td>
                    <td class="col-1">{{date('d/m/Y', strtotime($r->Ngay))}}</td>
                    <td class="col-2 text-center">
                         <a class="btn btn-primary my-2" href="/admin/binhluan/delete/{{$r->idYKien}}" onclick="return confirm('Bạn có muốn xóa bình luận này?')" role="button">Xóa</a>
                         <a class="btn btn-primary" href="/chitiettin/{{$r->idTin}}" role="button">Xem chi tiết</a>
                    </td>
               </tr>
          @endforeach
     </table>
     {{$getlist->appends(request()->all())->links()}}
@endsection