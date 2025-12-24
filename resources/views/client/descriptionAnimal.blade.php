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
<x-nav></x-nav>

<section class="flex flex-col gap-6 items-center">
    <div class="flex">
        <h2 class="hidden">Information sur le chien</h2>
        <img alt="" src="{{asset('Sans titre-1 5.png')}}">
        <div class="flex flex-col justify-center gap-4">
            <span>Rex</span>
            <span>3 ans</span>
            <span>Berger croisé</span>
        </div>
    </div>
    <p class="pl-5 pr-5">Rex est un jeune croisé berger d’environ deux ans, au regard aussi doux que curieux. toujours prêt à
        partir en balade ou à jouer, il déborde d’énergie et de bonne humeur. C’est un chien qui aime bouger, explorer
        et surtout partager chaque instant avec ceux qu’il aime. Sous son allure vive se cache un chien très attachant
        et sensible. Dès qu’il se sent en confiance, Rex devient un véritable pot de colle : il adore les câlins et les
        moments de complicité. Il apprend vite et aime faire plaisir, surtout lorsqu’il est encouragé avec douceur. Rex
        s’entend bien avec les autres chiens, mais il a encore besoin d’un peu de cadre pour canaliser son enthousiasme.
        Avec une famille présente, patiente et active, il s’épanouira pleinement. Il rêve simplement d’un foyer
        chaleureux, de longues promenades et de beaucoup d’amour.</p>
    <x-button class="cta2">Adoption</x-button>
</section>

<section>
    <h2 class="title pl-5">D’autres animaux</h2>
    <x-cardAnimals image="{{asset('Sans titre-1 5.png')}}" name="Rex" sexe="Mâle" age="2 ans" cta="adopter"></x-cardAnimals>
</section>
<x-footer></x-footer>
</body>
</html>
