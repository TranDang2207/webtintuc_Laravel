@extends ('Admin.layoutsad.layout')
@section ('content')
    <button type='button' class='btn btn-success m-2'><a href='/admin/theloai' class='text-decoration-none text-white m-2'>Trở lại</a></button>
    <h2 class="text-center my-2">Thêm thể loại</h2>
    <form action="/admin/theloai/insert" method="post" class="col-6 m-auto">
        @csrf()
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bolder">Tên thể loại</label>
            <input type="text" class="form-control" name="TenTL" value="{{old('TenTL')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bolder">Ngôn ngữ</label>
            <div class="form-check form-check-inline offset-1">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="vi" checked>
                <label class="form-check-label" for="inlineRadio1">Tiếng việt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="en">
                <label class="form-check-label" for="inlineRadio2">Tiếng anh</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bolder">Ẩn hiện</label>
            <div class="form-check form-check-inline offset-1">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="1" checked>
                <label class="form-check-label" for="inlineRadio3">Hiện</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="0">
                <label class="form-check-label" for="inlineRadio4">Ẩn</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bolder">Hiển thị lên menu</label>
            <div class="form-check form-check-inline offset-1">
                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio5" value="1" checked>
                <label class="form-check-label" for="inlineRadio5">Có</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio6" value="0">
                <label class="form-check-label" for="inlineRadio6">Không</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
@endsection