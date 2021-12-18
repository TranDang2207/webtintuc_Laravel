@extends ('Admin.layoutsad.layout')
@section('content')
    <h2 class="text-center my-2">Tin tức</h2>
    <a class="btn btn-primary m-2 px-4" href="/admin/tintuc/add" role="button">Thêm mới</a>
    <a class="btn btn-primary m-2 px-4" href="/admin/tintuc/private" role="button">Danh sách tin ẩn</a>
    <form action="">
        <div class="input-group mb-3 my-3">
            <input type="text" class="form-control" name="search" placeholder="Search  by Tieu De"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Tìm kiếm</button>
        </div>
    </form>
    <hr>
    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Hình</th>
                <th>Ngày đăng</th>
                <th>Ngôn ngữ</th>
                <th>Loại tin</th>
                <th>Lượt xem</th>
                <th>Nổi bật</th>
                <th>Trạng thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getTin as $r)
                <?php
                if ($r->AnHien == '1') {
                    $anhien = 'Hiện';
                } else {
                    $anhien = 'Ẩn';
                }
                
                if ($r->lang == 'vi') {
                    $lang = 'Tiếng Việt';
                } else {
                    $lang = 'English';
                }
                
                if ($r->NoiBat == 0) {
                    $menu = 'Không';
                } else {
                    $menu = 'Có';
                }
                ?>
                <tr>
                    <td>{{ $r->idTin }}</td>
                    <td class="col-3">{{ $r->TieuDe }}</td>
                    <td class="col-1"><img src="../../{{ $r->urlHinh }}" style="width: 100%" alt=""></td>
                    <td>{{ date('d/m/Y', strtotime($r->Ngay)) }}</td>
                    <td>{{ $lang }}</td>
                    <td>{{ $r->loaitin->Ten }}</td>
                    <td>{{ $r->SoLanXem }}</td>
                    <td>{{ $menu }}</td>
                    <td>{{ $anhien }}</td>
                    <td class="col-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne{{ $r->idTin }}" aria-expanded="true"
                                        aria-controls="collapseOne{{ $r->idTin }}">
                                        Cài đặt
                                    </button>
                                </h2>
                                <div id="collapseOne{{ $r->idTin }}" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="/admin/tintuc/edit/{{ $r->idTin }}"
                                                class="list-group-item list-group-item-action">Sửa bài viết</a>
                                            <a href="/admin/tintuc/delete/{{ $r->idTin }}"
                                                onclick="return confirm('Bạn có chắc muốn xóa tin này?!!')"
                                                class="list-group-item list-group-item-action">Xóa bài viết</a>
                                            <a href="/admin/tintuc/chitietsanpham/{{ $r->idTin }}"
                                                class="list-group-item list-group-item-action">Chi tiết bài viết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $getTin->appends(request()->all())->links() }}
@endsection
@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
