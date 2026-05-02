<div class="flex items-center gap-5 text-base">
    @foreach($socialLinks as $link)
        <a href="{{ $link->url ?? '' }}" aria-label="X" class="transition hover:text-accent-200">{!! $link->icon ?? '' !!}</a>
    @endforeach
    
</div>