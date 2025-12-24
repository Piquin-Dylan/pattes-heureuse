<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-regal-baige">
<header>
    <x-nav></x-nav>
</header>
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
    <x-cardAnimals image="{{asset('Sans titre-1 5.png')}}" name="Rex" sexe="Mâle" age="2 ans" cta="adopter"></x-cardAnimals>
</section>
<x-footer></x-footer>
</body>
</html>
