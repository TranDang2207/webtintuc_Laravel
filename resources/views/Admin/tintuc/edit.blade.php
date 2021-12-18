@extends ('Admin.layoutsad.layout')
@section('content')
    <button type='button' class='btn btn-success m-2'><a href='/admin/tintuc'
            class='text-decoration-none text-white m-2'>Trở lại</a></button>
    <form action="/admin/tintuc/update" method="post" style="border: 1px solid rgb(172, 172, 172)"
        class="row g-3 m-3 p-2 bg-white" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center">Sửa tin</h2>

        <div class="row">
            <div class="col-9">
                <div class="mb-3">
                    <label for="" class="form-label">Tiêu đề</label>
                    <input type="text" name="TieuDe" id="" class="form-control" value="{{ $tinchitiet->TieuDe }}"
                        placeholder="" aria-describedby="helpId">
                    @error('TieuDe')
                        <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tóm tắt</label>
                    <textarea class="form-control" name="TomTat" id="summernote"
                        rows="3"> {{ $tinchitiet->TomTat }}</textarea>
                    @error('TomTat')
                        <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nội dung</label>
                    <textarea class="form-control" name="Content" id="summernote2"
                        rows="3">{{ $tinchitiet->Content }}</textarea>
                    @error('Content')
                        <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="" class="form-label">Loại tin</label>
                    <select class="form-select" name="idLT" id="">
                        @foreach ($loaitin as $r)
                            @if ($tinchitiet->idLT == $r->idLT)
                                <option value="{{ $r->idLT }}" selected>{{ $r->Ten }}</option>
                            @else
                                <option value="{{ $r->idLT }}">{{ $r->Ten }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ngôn ngữ</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lang" value="vi" id="flexRadioDefault1" <?php if($tinchitiet->lang == 'vi') echo 'checked'?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Tiếng Việt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lang" value="en" id="flexRadioDefault2" <?php if($tinchitiet->lang == 'en') echo 'checked'?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Tiếng Anh
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nổi bật</label>
                    <div class="form-check form-check-inline offset-1">
                        <input class="form-check-input" type="radio" name="NoiBat" value="0" id="flexRadioDefault3" <?php if($tinchitiet->NoiBat == 0) echo 'checked'?>>
                        <label class="form-check-label" for="flexRadioDefault3">
                            Không
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="NoiBat" value="1" id="flexRadioDefault4" <?php if($tinchitiet->NoiBat == 1) echo 'checked'?>>
                        <label class="form-check-label" for="flexRadioDefault4">
                            Có
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Trạng thái</label>
                    <div class="form-check form-check-inline offset-1">
                        <input class="form-check-input" type="radio" name="AnHien" value="0" id="flexRadioDefault5" <?php if($tinchitiet->AnHien == 0) echo 'checked'?>>
                        <label class="form-check-label" for="flexRadioDefault5">
                            Ẩn
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="AnHien" value="1" id="flexRadioDefault6" <?php if($tinchitiet->AnHien == 1) echo 'checked'?>>
                        <label class="form-check-label" for="flexRadioDefault6">
                            Hiện
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Tag</label>
                  <input type="text" class="form-control" name="tags" id="" value="{{$tinchitiet->tags}}" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-group" for="inputGroupFile01">Ảnh</label>
                    <div class="input-group mb-3">
                        <input type="file" name="img" value="xin chao" class="form-control" id="inputGroupFile01">
                    </div>
                    @error('img')
                        <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <?php $arrImg = explode('/',$tinchitiet->urlHinh)?>
                    <input type="text" name="image" value="{{$arrImg[2]}}" readonly class="form-control">
                    <img src="{{url($tinchitiet->urlHinh)}}" style="width: 100%" alt="">
                </div>
                <input type="hidden" value="{{$tinchitiet->idTin}}" name="idTin">
                <button type="submit" class="float-end btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
@endsection
@section('css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../qt/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../qt/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../../qt/plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="../../../qt/plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="../../../qt/plugins/codemirror/theme/monokai.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../../qt/plugins/simplemde/simplemde.min.css">
@endsection
@section('js')

    <!-- jQuery -->
    <script src="../../../qt/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../qt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../qt/dist/js/adminlte.min.js"></script>
    <!-- Summernote -->
    <script src="../../../qt/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="../../../qt/plugins/codemirror/codemirror.js"></script>
    <script src="../../../qt/plugins/codemirror/mode/css/css.js"></script>
    <script src="../../../qt/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../../qt/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                height: 250,
            });
            $('#summernote2').summernote({
                height: 250,
            });
        })
    </script>
@endsection
