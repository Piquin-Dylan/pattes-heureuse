
<section class="pb-6">
    <h2 class="text-4xl pb-5 pt-4 pl-5 font-bold">Nos animaux</h2>
    <div class="flex flex-col items-center gap-4 pl-5 md:flex-row lg:flex-row lg:gap-6">
        <x-button>Tout les animaux</x-button>
        <x-button>Chien</x-button>
        <x-button>Chat</x-button>
    </div>
    <div class="flex flex-row  justify-center flex-wrap lg:justify-start">
        <x-cardAnimals image="{{asset('Sans titre-1 5.png')}}" name="Rex" sexe="Mâle" age="2 ans" cta="adopter"></x-cardAnimals>
        <x-cardAnimals image="{{asset('Sans titre-1 5.png')}}" name="Rex" sexe="Mâle" age="2 ans" cta="adopter"></x-cardAnimals>
        <x-cardAnimals image="{{asset('Sans titre-1 5.png')}}" name="Rex" sexe="Mâle" age="2 ans" cta="adopter"></x-cardAnimals>
        <x-cardAnimals image="{{asset('Sans titre-1 5.png')}}" name="Rex" sexe="Mâle" age="2 ans" cta="adopter"></x-cardAnimals>
    </div>

</section>
