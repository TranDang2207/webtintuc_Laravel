<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->

        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <header class="row">
                <div class="frmlogin">
                    <div class="register">
                        <a href="/register">Đăng ký</a>
                    </div>
                    <div class="login">
                        <a href="/login">Đăng nhập</a>
                    </div>
                </div>
                <div class="logo">
                    <a href="/">TiHa</a>
                </div>
                <div class="slogan">Nâng cấp cuộc sống của bạn</div>
            </header>
            <nav class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/gt">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/lh">Liên hệ</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/admin">Admin</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Tìm</button>
                        </form>
                        </div>
                    </div>
                </nav>
            </nav>
            <main class="row">
                <article class="col-9 bg-light">
                    @section('content')

                    @show
                </article>
                <aside class="col-3 bg-info">
                    Đây là widget
                </aside>
            </main>
            <footer class="row bg-dark">
                Đây là footer
            </footer>
        </div>
    </body>
</html>