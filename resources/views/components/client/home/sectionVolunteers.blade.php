<x-section
    title_section="section présentation"
    title_content="{{ __('Vous aimez les animaux et avez du temps à donner ? Devenez bénévole !') }}"
    content="{{ __('Rejoignez notre équipe de bénévoles et aidez nos animaux à trouver le bonheur qu’ils méritent. Que ce soit pour les promener, les soigner, les accueillir au refuge ou participer à nos événements, votre temps et votre énergie font toute la différence. Chaque geste compte et contribue à offrir un foyer aimant à nos animaux') }}"
    image="{{ asset('ImageSectionPrésentation.png') }}"

    cta1_label="Adoptions"
    cta1_link="{{route('client.adoption')}}"

    cta2_label="Nous Contacter"
    cta2_link="contact"
>
</x-section>
