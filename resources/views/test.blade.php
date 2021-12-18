<ul>
    @foreach ($getlistTL as $r)
        <li>{{ $loop->iteration }} - {{ $r->TenTL }}</li>
        <ul>
            <?php $i = 1; ?>
            @foreach ($r->tin as $tin)
                @if ($tin->urlHinh != '')
                    <li>{{ $loop->iteration }} - {{ $tin->urlHinh }} </li>
                    @if ($i++ == 5)
                    @break;
                @endif
            @endif
    @endforeach
</ul>
@endforeach
