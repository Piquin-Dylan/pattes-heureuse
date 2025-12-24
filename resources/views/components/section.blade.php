@props([
    'title_section',
    'title_content',
    'content',
    'cta1_label' => null,
    'cta1_link' => null,
    'cta2_label' => null,
    'cta2_link' => null,
    'image' => null,
])
<section class="pb-6 pl-5 pr-5 pt-8 md:pt-12 sectionFlex">
    <div class="max-w-content">

        <h2 class="hidden">{{ $title_section }}</h2>
        <p class="font-bold pb-4 text-title">{{ $title_content }}</p>
        <p class="text-subtitle">{{ $content }}</p>

        <div class="flex gap-8 justify-center pt-5 pb-5">

            @if($cta1_label && $cta1_link)
                <x-button link="{{ $cta1_link }}" class="cta1">
                    {{ $cta1_label }}
                </x-button>
            @endif

            @if($cta2_label && $cta2_link)
                <x-button link="{{ $cta2_link }}" class="cta2">
                    {{ $cta2_label }}
                </x-button>
            @endif

        </div>
    </div>

    <img class="lg:max-w-image lg:max-h-image"
         alt="Image de section"
         src="{{ $image }}">
</section>
