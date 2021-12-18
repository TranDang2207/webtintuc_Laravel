@extends ('Admin.layoutsad.layout')
@section ('content')
    <button type='button' class='btn btn-success m-2'><a href='/admin/taikhoan'class='text-decoration-none text-white m-2'>Trở lại</a></button>
    <h2 class="text-center my-2">Sửa thông tin tài khoản</h2>
    <form action="/admin/taikhoan/update" method="post" class="col-6 m-auto">
        @csrf()
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="text" class="form-control" name="txtMa" id="exampleInputEmail1" value="<?= $getUser->idUser ?>" aria-describedby="emailHelp" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Username</label>
            <input type="text" class="form-control" name="txtTen" id="exampleInputPassword2" value="<?= $getUser->username ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword3" class="form-label">Email</label>
            <input type="text" class="form-control" name="txtTen" id="exampleInputPassword3" value="<?= $getUser->email ?>" readonly>
        </div>
        <div class="mb-3">
                <label for="" class="form-label h6">Quyền hạn</label>
                <div class="form-check form-check-inline offset-1">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" <?php if($getUser->idgroup == 1) echo 'checked' ?>>
                    <label class="form-check-label" for="inlineRadio1">Admin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" <?php if($getUser->idgroup == 0) echo 'checked' ?>>
                    <label class="form-check-label" for="inlineRadio2">User</label>
                </div>
            </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection