<x-layouts.client>
<section class="flex flex-col">
    <h2 class="hidden">Rechercher un animal</h2>
        <div class="flex justify-center p-5">
    <input  placeholder="rechercher un animal"  class="bg-white rounded-2xl p-3 w-64 " type="search">
        </div>
    <div class="flex flex-col gap-5 items-center md:flex-row md:gap-5 justify-center p-5">
     <x-select option1="Mâle" option2="Femelle"></x-select>
     <x-select option1="Bébé ( 0-6 mois )" option2="Jeune ( 6 mois à 2 ans )" option3="Adulte"></x-select>
     <x-select option1="chat" option2="chien"></x-select>
     <x-select option1="petit" option2="grand"></x-select>
    </div>
</section>

</x-layouts.client>
