@props(['link' => null])

@php
    use Illuminate\Support\Str;

    if ($link === null) {
        $href = '#';
    } elseif (Str::startsWith($link, ['https://', 'https://'])) {
        $href = $link;
    } else {
        $href = route($link);
    }
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'rounded-lg bg-white p-4 w-48 font-extrabold text-regal-orange cursor-pointer inline-block'
    ]) }}>
    {{ $slot }}
</a>
