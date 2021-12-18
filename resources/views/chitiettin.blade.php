@extends('layouts.abc')
@section('content')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li><a href="/{{ $tin->theloai->TenTL }}" class="btn-link">{{ $tin->loaitin->Ten }}</a></li>
                <li class="active"><span>{{ $tin->TieuDe }}</span></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Post Item Start -->
                        <div class="post--item post--single post--title-largest pd--30-0">
                            <div class="post--img">
                                <a href="#" class="thumb"><img src="{{ url($tin->urlHinh) }}"
                                        style="width: 750px;height: 500px;object-fit: contain" alt=""></a>
                                <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                <div class="post--map">
                                    <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>

                                    <div class="map--wrapper">
                                        <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6"
                                            data-map-marker="[[23.790546, 90.375583]]"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="post--cats">
                                <ul class="nav">
                                    <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                    <li><a href="#">{{ $tin->theloai->TenTL }}</a></li>
                                    <li><a href="#">{{ $tin->loaitin->Ten }}</a></li>
                                </ul>
                            </div>

                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a></li>
                                    <li><span><i class="fa fm fa-eye"></i>{{ $tin->SoLanXem }}</span></li>
                                    <li><a href="#"><i class="fa fm fa-comments-o"></i>{{ $tin->comments->count() }}</a>
                                    </li>
                                </ul>

                                <div class="title">
                                    <h2 class="h4">{{ $tin->TieuDe }}</h2>
                                </div>
                            </div>

                            <div class="post--content">
                                <b>{{ $tin->TomTat }}</b>

                                <div><?= $tin->Content ?></div>
                            </div>
                        </div>
                        <!-- Post Item End -->

                        <!-- Advertisement Start -->
                        <div class="ad--space pd--20-0-40">
                            <a href="#">
                                <img src="{{ url('img/ads-img/ad-728x90-02.jpg') }}" alt="" class="center-block">
                            </a>
                        </div>
                        <!-- Advertisement End -->

                        <!-- Post Tags Start -->
                        <div class="post--tags">
                            <ul class="nav">
                                <li><span><i class="fa fa-tags"></i></span></li>
                                <li><a href="#">{{ $tin->theloai->TenTL }}</a></li>
                                <li><a href="#">{{ $tin->loaitin->Ten }}</a></li>
                                @if ($tin->tags != '')
                                    <li><a href="#">{{ $tin->tags }}</a></li>
                                @endif
                            </ul>
                        </div>
                        <!-- Post Tags End -->

                        <!-- Post Social Start -->
                        <div class="post--social pbottom--30">
                            <span class="title"><i class="fa fa-share-alt"></i></span>

                            <!-- Social Widget Start -->
                            <div class="social--widget style--4">
                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Widget End -->
                        </div>
                        <!-- Post Social End -->

                        <!-- Post Nav Start -->
                        <div class="post--nav">
                            <ul class="nav row">
                                @foreach ($tintheoTL as $tinTL)
                                    <li class="col-xs-6 ptop--30 pbottom--30">
                                        <!-- Post Item Start -->
                                        <div class="post--item">
                                            <div class="post--img">
                                                <a href="/chitiettin/{{ $tinTL->idTin }}" class="thumb"><img
                                                        src="{{ url($tinTL->urlHinh) }}" style="width: 80px;height: 50px"
                                                        alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a
                                                                href="#">{{ date('d/m/Y h:i:s A', strtotime($tinTL->Ngay)) }}</a>
                                                        </li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="/chitiettin/{{$tinTL->idTin}}"
                                                                class="btn-link">{{ $tinTL->TieuDe }}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Post Nav End -->

                        <!-- Post Related Start -->
                        <div class="post--related ptop--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">You Might Also Like</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_related_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_related_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">
                                    @foreach ($tinkhacTL as $new)
                                        @if ($loop->first)
                                            <li class="col-sm-6 pbottom--30">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="/chitiettin/{{ $new->idTin }}"
                                                            class="thumb"><img src="{{ url($new->urlHinh) }}"
                                                                style="width: 360px;height: 175px" alt=""></a>
                                                        <a href="#" class="cat">{{ $new->loaitin->Ten }}</a>
                                                        <a href="#" class="icon"><i
                                                                class="fa fa-flash"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="#">{{ date('d/m/Y h:i:s A', strtotime($new->Ngay)) }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="/chitiettin/{{ $new->idTin }}"
                                                                        class="btn-link">{{ $new->TieuDe }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p>{{ $new->TomTat }}</p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="/chitiettin/{{ $new->idTin }}">Continue Reading... </a>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        @else
                                            <li class="col-sm-6 hidden-xs pbottom--30">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="/chitiettin/{{ $new->idTin }}"
                                                            class="thumb"><img src="{{ url($new->urlHinh) }}"
                                                                style="width: 360px;height: 175px;object-fit: contain;"
                                                                alt=""></a>
                                                        <a href="#" class="cat">{{ $new->loaitin->Ten }}</a>
                                                        <a href="#" class="icon"><i
                                                                class="fa fa-flash"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="#">{{ date('d/m/Y h:i:s A', strtotime($new->Ngay)) }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="/chitiettin/{{ $new->idTin }}"
                                                                        class="btn-link">{{ $new->TieuDe }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p>{{ $new->TomTat }}</p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="/chitiettin/{{ $new->idTin }}">Continue Reading... </a>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Post Related End -->

                        <!-- Comment List Start -->
                        <div class="comment--list pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
                                <h2 class="h4">{{ $tin->comments->count() }} Comments</h2>

                                <i class="icon fa fa-comments-o"></i>
                            </div>
                            <!-- Post Items Title End -->

                            <ul class="comment--items nav">
                                @foreach ($comments as $cmt)
                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment--item clearfix">

                                        <div class="comment--info">
                                            <div class="comment--header clearfix">
                                                <p class="name">{{$cmt->user->username}}</p>
                                                <p class="date">{{date('d/m/Y h:i:s A',strtotime($cmt->Ngay))}}</p>

                                                @if(session('idUser') == $cmt->user->idUser || session('idgroup') == 1)
                                                <a href="/chitiettin/delete/{{$cmt->idYKien}}" onclick="return confirm('Bạn có muốn xóa bình luận')" class="reply"><i class="fa fa-trash"></i></a>
                                                @endif
                                            </div>

                                            <div class="comment--content">
                                                <p>{{$cmt->NoiDung}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Comment List End -->

                        <!-- Comment Form Start -->
                        <div class="comment--form pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
                                <h2 class="h4">Leave A Comment</h2>

                                <i class="icon fa fa-pencil-square-o"></i>
                            </div>
                            <!-- Post Items Title End -->

                            <div class="comment-respond">
                                <form action="{{session('idUser') != null ? '/chitiettin/insertCmt' : '/chitiettin/UserAndCmt'}}" method="POST" data-form="validate">
                                    @csrf
                                    <p>Don’t worry ! Your email address will not be published.</p>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>
                                                <span>Comment</span>
                                                <textarea name="NoiDung" class="form-control" value="{{old('NoiDung')}}" required></textarea>
                                            </label>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>
                                                <span>Name</span>
                                                <input type="text" name="username" value="{{session('username') != null ? session('username') : old('username')}}" {{session('idUser') != null ? 'readonly' : ''}} class="form-control">
                                                @error('username')
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </div>
                                                @enderror
                                            </label>
                                            <input type="hidden" name="idTin" value="{{$tin->idTin}}">
                                            @if(session('idUser') != null)
                                                <input type="hidden" name="idUser" value="{{session('idUser')}}">
                                            @endif
                                            <label>
                                                <span>Email Address</span>
                                                <input type="email" name="email" value="{{session('email') != null ? session('email') : old('email')}}" {{session('idUser') != null ? 'readonly' : ''}} class="form-control">
                                                @error('email')
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </div>
                                                @enderror
                                            </label>
                                            @if(session('idUser') == null)
                                            <label>
                                                <span>Password</span>
                                                <input type="password" name="password" value="{{old('password')}}" class="form-control" >
                                                @error('password')
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </div>
                                                @enderror
                                            </label>

                                            <label>
                                                <span>Password confirm</span>
                                                <input type="password" name="repassword" value="{{old('repassword')}}" class="form-control">
                                                @error('repassword')
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </div>
                                                @enderror
                                            </label>
                                            @endif
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Post a Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Comment Form End -->
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Widget Start -->
                        <div class="widget">
                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="img/ads-img/ad-300x250-1.jpg" alt="">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Stay Connected</h2>
                                <i class="icon fa fa-share-alt"></i>
                            </div>

                            <!-- Social Widget Start -->
                            <div class="social--widget style--1">
                                <ul class="nav">
                                    <li class="facebook">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-facebook-f"></i></span>
                                            <span class="count">521</span>
                                            <span class="title">Likes</span>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-twitter"></i></span>
                                            <span class="count">3297</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-google-plus"></i></span>
                                            <span class="count">596282</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="rss">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-rss"></i></span>
                                            <span class="count">521</span>
                                            <span class="title">Subscriber</span>
                                        </a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-vimeo"></i></span>
                                            <span class="count">3297</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-youtube-square"></i></span>
                                            <span class="count">596282</span>
                                            <span class="title">Subscriber</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Get Newsletter</h2>
                                <i class="icon fa fa-envelope-open-o"></i>
                            </div>

                            <!-- Subscribe Widget Start -->
                            <div class="subscribe--widget">
                                <div class="content">
                                    <p>Subscribe to our newsletter to get latest news, popular news and exclusive updates.
                                    </p>
                                </div>

                                <form
                                    action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
                                    method="post" name="mc-embedded-subscribe-form" target="_blank"
                                    data-form="mailchimpAjax">
                                    <div class="input-group">
                                        <input type="email" name="EMAIL" placeholder="E-mail address"
                                            class="form-control" autocomplete="off" required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-lg btn-default active"><i
                                                    class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                    </div>

                                    <div class="status"></div>
                                </form>
                            </div>
                            <!-- Subscribe Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Featured News</h2>
                                <i class="icon fa fa-newspaper-o"></i>
                            </div>

                            <!-- List Widgets Start -->
                            <div class="list--widget list--widget-1">
                                <div class="list--widget-nav" data-ajax="tab">
                                    <ul class="nav nav-justified">
                                        <li>
                                            <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a>
                                        </li>
                                        <li class="active">
                                            <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                        </li>
                                        <li>
                                            <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/news-widget-01.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Ninurta</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/news-widget-02.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Orcus</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/news-widget-03.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Rahab</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/news-widget-04.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Tannin</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- List Widgets End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Advertisement</h2>
                                <i class="icon fa fa-bullhorn"></i>
                            </div>

                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="img/ads-img/ad-300x250-2.jpg" alt="">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Voting Poll (Checkbox)</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Poll Widget Start -->
                            <div class="poll--widget" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li class="title">
                                        <h3 class="h4">Which was the best Football World Cup ever in your
                                            opinion?</h3>
                                    </li>

                                    <li class="options">
                                        <form action="#">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="option-1">
                                                    <span>Brazil 2014</span>
                                                </label>

                                                <p>65%<span style="width: 65%;"></span></p>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="option-2">
                                                    <span>South Africa 2010</span>
                                                </label>

                                                <p>28%<span style="width: 28%;"></span></p>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="option-2">
                                                    <span>Germany 2006</span>
                                                </label>

                                                <p>07%<span style="width: 07%;"></span></p>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Vote Now</button>
                                        </form>
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Poll Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Voting Poll (Radio)</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Poll Widget Start -->
                            <div class="poll--widget" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li class="title">
                                        <h3 class="h4">Do you think the cost of sending money to mobile phone
                                            should be reduced?</h3>
                                    </li>

                                    <li class="options">
                                        <form action="#">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="option-1">
                                                    <span>Yes</span>
                                                </label>

                                                <p>65%<span style="width: 65%;"></span></p>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="option-1">
                                                    <span>No</span>
                                                </label>

                                                <p>28%<span style="width: 28%;"></span></p>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="option-1">
                                                    <span>Average</span>
                                                </label>

                                                <p>07%<span style="width: 07%;"></span></p>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Vote Now</button>
                                        </form>
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Poll Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#">
                                            <img src="img/ads-img/ad-150x150-1.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="col-sm-6">
                                        <a href="#">
                                            <img src="img/ads-img/ad-150x150-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Readers Opinion</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_readers_opinion_widget">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_readers_opinion_widget">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- List Widgets Start -->
                            <div class="list--widget list--widget-2" data-ajax-content="outer">
                                <!-- Post Items Start -->
                                <div class="post--items post--items-3">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <span class="thumb">
                                                        <img src="img/widgets-img/readers-opinion-01.png" alt="">
                                                    </span>

                                                    <div class="post--info">
                                                        <div class="title">
                                                            <h3 class="h4">Long established fact that a reader
                                                                will be distracted</h3>
                                                        </div>

                                                        <ul class="nav meta">
                                                            <li><span>by Ninurta</span></li>
                                                            <li><span>16 April 2017</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <span class="thumb">
                                                        <img src="img/widgets-img/readers-opinion-02.png" alt="">
                                                    </span>

                                                    <div class="post--info">
                                                        <div class="title">
                                                            <h3 class="h4">Long established fact that a reader
                                                                will be distracted</h3>
                                                        </div>

                                                        <ul class="nav meta">
                                                            <li><span>by Ninurta</span></li>
                                                            <li><span>16 April 2017</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <span class="thumb">
                                                        <img src="img/widgets-img/readers-opinion-03.png" alt="">
                                                    </span>

                                                    <div class="post--info">
                                                        <div class="title">
                                                            <h3 class="h4">Long established fact that a reader
                                                                will be distracted</h3>
                                                        </div>

                                                        <ul class="nav meta">
                                                            <li><span>by Ninurta</span></li>
                                                            <li><span>16 April 2017</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- List Widgets End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Editors Choice</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_editors_choice_widget">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_editors_choice_widget">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- List Widgets Start -->
                            <div class="list--widget list--widget-1" data-ajax-content="outer">
                                <!-- Post Items Start -->
                                <div class="post--items post--items-3">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-01.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Ninurta</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-02.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Orcus</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-03.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Rahab</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-04.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Tannin</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#"
                                                                    class="btn-link">Long established fact that a
                                                                    reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- List Widgets End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                </div>
                <!-- Main Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Main Content Section End -->
@endsection
