{{-- resources/views/templates/home-preview.blade.php --}}

<x-layouts.home>
    {{-- Optionally include subnav if needed --}}
    <x-layouts.subnav />

    <div class="builder-content">
        @foreach ($page->content as $block)
            {{-- This calls your existing block-specific blade components --}}
            <x-dynamic-component 
                :component="'blocks.' . $block['type']" 
                :data="$block['data']" 
            />
        @endforeach
    </div>
</x-layouts.home>