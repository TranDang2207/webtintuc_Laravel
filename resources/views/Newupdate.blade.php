<?php
    use App\Models\tin;
    $getNews = tin::where('urlHinh','!=','')->orderby('Ngay','desc')->limit(5)->get();
?>
<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>News Updates</h2>
        </div>

        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                @foreach($getNews as $tin)
                <li>
                    <h3 class="h3"><a href="/chitiettin/{{$tin->idTin}}">{{$tin->TieuDe}}</a></h3>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>