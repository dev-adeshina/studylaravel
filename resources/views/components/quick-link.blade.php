
<div class="mt-5 space-y-3">
    @foreach($links as $link) 
        <a href="{{ route($link->url) }}" class="quick-link-text block">{{ $link->name ?? '' }}</a>
    @endforeach

</div>