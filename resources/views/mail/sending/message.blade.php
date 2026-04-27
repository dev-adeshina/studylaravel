<x-mail::message>
{!! $content !!}

@if(isset($url))
<x-mail::button :url="$url">
View Details
</x-mail::button>
@endif

</x-mail::message>