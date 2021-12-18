@extends ('Admin.layoutsad.layout')
@section ('content')
    <button type='button' class='btn btn-success m-2'><a href='/admin/loaitin' class='text-decoration-none text-white m-2'>Trở lại</a></button>
    <h2 class="text-center my-2">Thêm loại tin</h2>
    <form action="/admin/loaitin/insert" method="post" class="col-6 m-auto">
        @csrf()
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bolder">Tên loại</label>
            <input type="text" class="form-control" name="tenloai" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if($errors->any())    
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bolder">Tên thể loại</label>
            <select class="form-select" name="tenTL" aria-label="Default select example">
                @foreach ($getTL as $r)
                    <option value="{{$r->idTL}}">{{$r->TenTL}}</option>
                @endforeach
            </select>
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
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
@endsection