<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->

        <link href="../../../stylead.css" rel="stylesheet">
        @yield('css')
    </head>
<body>
    <div class="container-fluid">
        <header class="row">
            <div class="container">
                <a href="" class="float-end">Xin chào {{session('username')}}</a><br>
                <a href="/admin/logout" class="float-end">log out</a> 
                <div class="header--logo float--left my-4 float--sm-none text-sm-center">
                    <h1 class="h1">
                        <a href="/admin" class="btn-link">
                            <img src="../../../template/img/logo.png" style="width: 30%" alt="USNews Logo">
                        </a>
                    </h1>
                </div>
            </div>
        </header>
        <main class="row">
            <aside class="col-2 bg-primary">
                <div class="list-group row">
                    <a href="/" class="list-group-item list-group-item-action">Xem giao diện</a>
                    <a href="/admin/loaitin" class="list-group-item list-group-item-action">Loại tin</a>
                    <a href="/admin/theloai" class="list-group-item list-group-item-action">Thể loại</a>
                    <a href="/admin/tintuc" class="list-group-item list-group-item-action">Tin tức</a>
                    <a href="/admin/taikhoan" class="list-group-item list-group-item-action">Tài khoản</a>
                    <a href="/admin/binhluan" class="list-group-item list-group-item-action">Bình luận</a>
                </div>
            </aside>
            <article class="col-10 bg-light">
                @yield('content')
            </article>
        </main>
    </div>
</body>
@yield('js')
</html>