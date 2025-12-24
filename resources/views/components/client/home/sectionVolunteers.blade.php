<x-section
    title_section="section présentation"
    title_content="{{ __('home.TitleSectionVolunteer') }}"
    content="{{ __('home.ContentSectionVolunteer') }}"
    image="{{ asset('ImageSectionPrésentation.png') }}"

    cta1_label="Adoptions"
    cta1_link="{{route('client.adoption')}}"

    cta2_label="Nous Contacter"
    cta2_link="contact"
>
</x-section>
