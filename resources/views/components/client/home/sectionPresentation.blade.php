<x-section
    title_section="section présentation"
    title_content="{{__('Chaque animal mérite un foyer sain où il pourra se sentir aimé.')}}"
    content="{{__('Sur notre site, vous découvrirez de nombreux animaux, chacun avec sa personnalité et son histoire. Ils n’attendent qu’une chose : trouver un foyer aimant où ils pourront recevoir de l’affection, se sentir en sécurité et partager des moments de bonheur avec vous. N’hésiter pas à nous contacter si vous avez des questions. ')}}"
    cta1_label="En savoir plus"
    cta1_link="{{route('client.about')}}"

    cta2_label="Adopter"
    cta2_link="{{route('client.adoption')}}"
    image="{{asset('ImageSectionPrésentation.png')}}">
</x-section>
