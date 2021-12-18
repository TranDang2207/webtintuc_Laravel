@extends ('Admin.layoutsad.layout')
@section ('content')
    <button type='button' class='btn btn-success m-2'><a onclick="history.back()" class='text-decoration-none text-white m-2'>Trở lại</a></button>
    <h2 class="text-center my-2">Thêm loại tin</h2>
    <form action="/admin/theloai/update" method="post" class="col-6 m-auto">
        @csrf()
        <input type="hidden" name="id" value="{{$getTL->idTL}}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bolder">Tên loại</label>
            <input type="text" class="form-control" name="TenTL" id="exampleInputEmail1" value="{{$getTL->TenTL}}" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bolder">Ngôn ngữ</label>
            <div class="form-check form-check-inline offset-1">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="vi" <?php if($getTL->lang == 'vi') echo 'checked' ?>>
                <label class="form-check-label" for="inlineRadio1">Tiếng việt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="en" <?php if($getTL->lang == 'en') echo 'checked' ?>>
                <label class="form-check-label" for="inlineRadio2">Tiếng anh</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bolder">Ẩn hiện</label>
            <div class="form-check form-check-inline offset-1">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="1" <?php if($getTL->AnHien == 1) echo 'checked' ?>>
                <label class="form-check-label" for="inlineRadio3">Hiện</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="0" <?php if($getTL->AnHien == 0) echo 'checked' ?>>
                <label class="form-check-label" for="inlineRadio4">Ẩn</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bolder">Hiển thị lên menu</label>
            <div class="form-check form-check-inline offset-1">
                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio5" value="1" <?php if($getTL->HienMenu == 1) echo 'checked' ?>>
                <label class="form-check-label" for="inlineRadio5">Có</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio6" value="0" <?php if($getTL->HienMenu == 0) echo 'checked' ?>>
                <label class="form-check-label" for="inlineRadio6">Không</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection