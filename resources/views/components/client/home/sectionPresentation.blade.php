<x-section
    title_section="section présentation"
    title_content="{{__('home.TitreSectionPrésentation')}}"
    content="{{__('home.MainContentSectionPresentation')}}"
    cta1_label="En savoir plus"
    cta1_link="{{route('client.about')}}"

    cta2_label="Adopter"
    cta2_link="{{route('client.adoption')}}"
    image="{{asset('ImageSectionPrésentation.png')}}">
</x-section>
