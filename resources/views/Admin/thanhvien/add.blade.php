@extends ('Admin.layoutsad.layout')
@section ('content')
    <button type='button' class='btn btn-success m-2'><a href='/admin/taikhoan'class='text-decoration-none text-white m-2'>Trở lại</a></button>
    <h2 class="text-center m-3">Thêm thành viên</h2>
    <form method="post" action="/admin/taikhoan/insert" style="border: 1px solid grey" class="needs-validation my-2 col-12 m-auto p-5 row bg-white">
            @csrf()
            <div class="mb-3">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="validationCustomUsername" value="{{old('username')}}" placeholder="Nhập từ 6 đến 14 ký tự">
                @error('username')
                    <div class="alert alert-danger" role="alert">
                        <li>{{$message}}</li>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="validationCustom03" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="pass" name="pass" id="validationCustom03" value="{{old('pass')}}" placeholder="password phải lớn hơn 8 ký tự">
                @error('pass')
                    <div class="alert alert-danger" role="alert">
                        <li>{{$message}}</li>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="validationCustom04" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" id="repass" class="form-control" name="repass" id="validationCustom04" value="{{old('repass')}}">
                @error('repass')
                    <div class="alert alert-danger" role="alert">
                        <li>{{$message}}</li>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="validationCustom05" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="validationCustom05" value="{{old('email')}}" placeholder="example@gmail.com">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        <li>{{$message}}</li>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label h6">Quyền hạn</label>
                <div class="form-check form-check-inline offset-1">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Admin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" checked>
                    <label class="form-check-label" for="inlineRadio2">User</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Thêm khách hàng</button>
            </div>
        </form>
@endsection