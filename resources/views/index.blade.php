@extends('layouts.abc')
@section('content')
    <div class="main-content--section pbottom--30">
        <div class="container">
            <!-- Main Content Start -->
            <div class="main--content">
                <!-- Post Items Start -->
                <div class="post--items post--items-1 pd--30-0">
                    <div class="row gutter--15">
                        @foreach ($getTin as $r)
                            @if ($loop->first)
                                <div class="col-md-6">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-larger">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $r->idTin }}" class="thumb"><img
                                                    src="{{ $r->urlHinh }}"
                                                    style="width: 563px; height: 389px;object-fit: contain;" alt=""></a>
                                            <a href="#" class="cat">{{ $r->loaitin->Ten }}</a>
                                            <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                            <div class="post--map">
                                                <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google
                                                    Map</p>

                                                <div class="map--wrapper">
                                                    <div data-map-latitude="23.790546" data-map-longitude="90.375583"
                                                        data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                                </div>
                                            </div>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d-m-Y', strtotime($r->Ngay)) }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h2 class="h4"><a href="/chitiettin/{{ $r->idTin }}"
                                                            class="btn-link">{{ $r->TieuDe }}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-md-6">
                                    <div class="row gutter--15">
                                        <div class="col-xs-6 col-xss-12">
                                            <!-- Post Item Start -->
                                        @elseif($loop->last)
                                        </div>

                                        <div class="col-sm-12 hidden-sm hidden-xs">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1 post--title-larger">
                                                <div class="post--img">
                                                    <a href="/chitiettin/{{ $r->idTin }}" class="thumb"><img
                                                            src="{{ $r->urlHinh }}"
                                                            style="width: 563; height: 186px; object-fit: contain;"
                                                            alt=""></a>
                                                    <a href="#" class="cat">{{ $r->loaitin->Ten }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">

                                                            <li><a href="#">{{ date('d-m-Y', strtotime($r->Ngay)) }}</a>
                                                            </li>
                                                        </ul>
                                                        <div class="title">
                                                            <h2 class="h4"><a
                                                                    href="/chitiettin/{{ $r->idTin }}"
                                                                    class="btn-link">{{ $r->TieuDe }}</a></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </div>
                                    </div>
                                </div>
                            @elseif($loop->remaining)
                                <div class="post--item post--layout-1 post--title-large">
                                    <div class="post--img">
                                        <a href="/chitiettin/{{ $r->idTin }}" class="thumb"><img
                                                src="{{ $r->urlHinh }}" style="width: 274px; height: 188px" alt=""></a>
                                        <a href="#" class="cat">{{ $r->loaitin->Ten }}</a>
                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">{{ date('d-m-Y', strtotime($r->Ngay)) }}</a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="/chitiettin/{{ $r->idTin }}"
                                                        class="btn-link">{{ $r->TieuDe }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                    </div>

                    <div class="col-xs-6 hidden-xss">
                        @endif
                        @endforeach
                    </div>
                </div>
                <!-- Post Items End -->
            </div>
            <!-- Main Content End -->
            <div class="row">
                <!-- Main Content Start -->
                <?php $n = 1; ?>
                @foreach ($getlistTL as $r)
                    @if ($n == 1)
                        <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                            <div class="sticky-content-inner">
                                <div class="row">
                                    <!-- World News Start -->
                                    <div class="col-md-6 ptop--30 pbottom--30">
                                        <!-- Post Items Title Start -->
                                        <div class="post--items-title" data-ajax="tab">
                                            <h2 class="h4">{{ $r->TenTL }}</h2>
                                            <div class="nav">
                                                <a href="#" class="prev btn-link"
                                                    data-ajax-action="load_prev_world_news_posts">
                                                    <i class="fa fa-long-arrow-left"></i>
                                                </a>

                                                <span class="divider">/</span>

                                                <a href="#" class="next btn-link"
                                                    data-ajax-action="load_next_world_news_posts">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Post Items Title End -->

                                        <!-- Post Items Start -->
                                        <div class="post--items post--items-2" data-ajax-content="outer">
                                            <ul class="nav row gutter--15" data-ajax-content="inner">
                                                <?php $i = 1; ?>
                                                @foreach ($r->tin as $tin)
                                                    @if ($tin->urlHinh != '')
                                                        @if ($i == 1)
                                                            <li class="col-xs-12">
                                                                <!-- Post Item Start -->
                                                                <div class="post--item post--layout-1">
                                                                    <div class="post--img">
                                                                        <a href="/chitiettin/{{ $tin->idTin }}"
                                                                            class="thumb"><img
                                                                                src="{{ $tin->urlHinh }}"
                                                                                style="width: 360px; height: 175px;object-fit: contain;"
                                                                                alt=""></a>
                                                                        <a href="#"
                                                                            class="cat">{{ $tin->loaitin->Ten }}</a>
                                                                        <a href="#" class="icon"><i
                                                                                class="fa fa-flash"></i></a>

                                                                        <div class="post--info">
                                                                            <ul class="nav meta">
                                                                                <li><a
                                                                                        href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a>
                                                                                </li>
                                                                            </ul>

                                                                            <div class="title">
                                                                                <h3 class="h4"><a
                                                                                        href="/chitiettin/{{ $tin->idTin }}"
                                                                                        class="btn-link">{{ $tin->TieuDe }}</a>
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Post Item End -->
                                                            </li>
                                                            <?php $i++; ?>
                                                        @else
                                                            @if ($loop->even == true)
                                                                <li class="col-xs-12">
                                                                    <!-- Divider Start -->
                                                                    <hr class="divider">
                                                                    <!-- Divider End -->
                                                                </li>
                                                            @endif
                                                            <li class="col-xs-6">
                                                                <!-- Post Item Start -->
                                                                <div class="post--item post--layout-2">
                                                                    <div class="post--img">
                                                                        <a href="/chitiettin/{{ $tin->idTin }}"
                                                                            class="thumb"><img
                                                                                src="{{ $tin->urlHinh }}"
                                                                                style="width: 173px; height: 96px;"
                                                                                alt=""></a>

                                                                        <div class="post--info">
                                                                            <ul class="nav meta">
                                                                                <li><a href="#"></a></li>
                                                                                <li><a
                                                                                        href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a>
                                                                                </li>
                                                                            </ul>

                                                                            <div class="title">
                                                                                <h3 class="h4"><a
                                                                                        href="/chitiettin/{{ $tin->idTin }}"
                                                                                        class="btn-link">{{ $tin->TieuDe }}</a>
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Post Item End -->
                                                            </li>
                                                            @if ($i++ == 5)
                                                            @break;
                                                        @endif
                                                    @endif
                                                @endif

                    @endforeach
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
        <!-- World News End -->
        <?php $n++; ?>
    @elseif($n == 2)
        <!-- Technology Start -->
        <div class="col-md-6 ptop--30 pbottom--30">
            <!-- Post Items Title Start -->
            <div class="post--items-title" data-ajax="tab">
                <h2 class="h4">{{ $r->TenTL }}</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_technology_posts">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_technology_posts">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Post Items Title End -->

            <!-- Post Items Start -->
            <div class="post--items post--items-3" data-ajax-content="outer">
                <ul class="nav" data-ajax-content="inner">
                    <?php $i = 1; ?>
                    @foreach ($r->tin as $tin)
                        @if ($tin->urlHinh != '')
                            @if ($i == 1)
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}"
                                                    style="width: 360px; height: 175px;object-fit: contain;" alt=""></a>
                                            <a href="#" class="cat">{{ $tin->loaitin->Ten }}</a>
                                            <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a>
                                                    </li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <?php $i++; ?>
                            @else
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a>
                                                    </li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                @if ($i++ == 5)
                                @break;
                            @endif
                        @endif
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
        <!-- Technology End -->

        <!-- Ad Start -->
        <div class="col-md-12 ptop--30 pbottom--30">
            <!-- Advertisement Start -->
            <div class="ad--space">
                <a href="#">
                    <img src="img/ads-img/ad-728x90-01.jpg" alt="" class="center-block">
                </a>
            </div>
            <!-- Advertisement End -->
        </div>
        <!-- Ad End -->
        <?php $n++; ?>
    @elseif($n == 3)
        <!-- Finance Start -->
        <div class="col-md-12 ptop--30 pbottom--30">
            <!-- Post Items Title Start -->
            <div class="post--items-title" data-ajax="tab">
                <h2 class="h4">{{ $r->TenTL }}</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_finance_posts">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_finance_posts">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Post Items Title End -->

            <!-- Post Items Start -->
            <div class="post--items post--items-2" data-ajax-content="outer">
                <ul class="nav row" data-ajax-content="inner">
                    <?php $i = 1; ?>
                    @foreach ($r->tin as $tin)
                        @if ($tin->urlHinh != '')
                            @if ($i == 1)
                                <li class="col-md-6">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-2">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}" style="width: 360px; height: 243px"
                                                    alt=""></a>
                                            <a href="#" class="cat">{{ $tin->loaitin->Ten }}</a>
                                            <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <?php $i++; ?>
                                <li class="col-md-6">
                                    <ul class="nav row">
                                    @else
                                        @if ($i == 4)
                                            <li class="col-xs-12">
                                                <!-- Divider Start -->
                                                <hr class="divider">
                                                <!-- Divider End -->
                                            </li>
                                        @endif

                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                            src="{{ $tin->urlHinh }}" style="width: 165px; height: 97px"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a
                                                                    href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a>
                                                            </li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                                    class="btn-link">{{ $tin->TieuDe }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @if ($i++ == 5)
                                        @break;
                            @endif
                        @endif
                    @endif
                    @endforeach
                </ul>
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
        <!-- Finance End -->
        <?php $n++; ?>
    @elseif($n == 6)
        <!-- Politics Start -->
        <div class="col-md-6 ptop--30 pbottom--30">
            <!-- Post Items Title Start -->
            <div class="post--items-title" data-ajax="tab">
                <h2 class="h4">{{ $r->TenTL }}</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Post Items Title End -->

            <!-- Post Items Start -->
            <div class="post--items post--items-2" data-ajax-content="outer">
                <ul class="nav row gutter--15" data-ajax-content="inner">
                    @php $i = 1 @endphp
                    @foreach ($r->tin as $tin)
                        @if ($tin->urlHinh != '')
                            @if ($i == 1)
                                <li class="col-xs-12">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}"
                                                    style="width: 360px; height: 175px;object-fit: contain" alt=""></a>
                                            <a href="#" class="cat">{{ $r->TenTL }}</a>
                                            <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                @php $i++ @endphp
                            @else
                                @if ($i == 2 || $i == 4)
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                @endif
                                <li class="col-xs-6">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-2">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}" style="width: 173px;height: 96px" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                @if ($i++ == 5)
                                @break;
                            @endif
                        @endif
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
        <!-- Politics End -->
        <?php $n++; ?>
    @elseif($n == 7)
        <!-- Sports Start -->
        <div class="col-md-6 ptop--30 pbottom--30">
            <!-- Post Items Title Start -->
            <div class="post--items-title" data-ajax="tab">
                <h2 class="h4">{{ $r->TenTL }}</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Post Items Title End -->

            <!-- Post Items Start -->
            <div class="post--items post--items-3" data-ajax-content="outer">
                <ul class="nav" data-ajax-content="inner">
                    @php $i = 1 @endphp
                    @foreach ($r->tin as $tin)
                        @if ($tin->urlHinh != '')
                            @if ($i == 1)
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}"
                                                    style="width: 360px;height: 175px;object-fit: contain" alt=""></a>
                                            <a href="#" class="cat">{{ $tin->loaitin->Ten }}</a>
                                            <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                @php $i++ @endphp
                            @else
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}" style="width: 100px;height: 70px" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                @if ($i++ == 5)
                                @break
                            @endif
                        @endif
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
        <!-- Sports End -->
    </div>
    </div>
    </div>
    <!-- Main Content End -->

    <!-- Main Sidebar Start -->
    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
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
                        <p>Subscribe to our newsletter to get latest news, popular news and exclusive
                            updates.</p>
                    </div>

                    <form
                        action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
                        method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                        <div class="input-group">
                            <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control"
                                autocomplete="off" required>

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
                    <h2 class="h4">Most Watched</h2>
                    <i class="icon fa fa-newspaper-o"></i>
                </div>

                <!-- List Widgets Start -->
                <div class="list--widget list--widget-1">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-3" data-ajax-content="outer">
                        <ul class="nav" data-ajax-content="inner">
                            @foreach ($getTin2 as $tin)
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="/chitiettin/{{ $tin->idTin }}" class="thumb"><img
                                                    src="{{ $tin->urlHinh }}" style="width: 100px;height: 70px;"
                                                    alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ date('d/m/Y', strtotime($tin->Ngay)) }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="/chitiettin/{{ $tin->idTin }}"
                                                            class="btn-link">{{ $tin->TieuDe }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
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
        </div>
    </div>
    <!-- Main Sidebar End -->
    </div>
    </div>
    </div>
    <!-- Main Content End -->
    <?php $n++; ?>
@else
    @php $n++ @endphp
    @endif
    @endforeach


    </div>
    </div>
@endsection
