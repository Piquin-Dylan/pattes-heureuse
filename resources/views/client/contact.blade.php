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
<section class="flex flex-col gap-4 p-5 md:flex-row lg:justify-center lg:gap-8">
    <form class="flex flex-col justify-center gap-4 items-center bg-white  rounded-3xl p-5 max-w-90">
        <h2 class="">Formulaire de contact</h2>
        <label class="label" for="name">Nom
            <input class="input" type="text" id="name" name="name" placeholder="Entrer votre nom">
        </label>
        <label class="label" for="firstname">Prénom
            <input class="input" type="text" id="firstname" name="firstname" placeholder="Entrer votre prénom">
        </label>
        <label class="label" for="subject">Sujet
            <input class="input" type="text" id="subject" name="subject" placeholder="Entrer votre sujet">
        </label>
        <label class="label" for="message">Message
            <textarea class="input" id="message" name="message"></textarea>
        </label>
        <x-button class="cta2">Envoyer</x-button>
    </form>

    <aside class="bg-regal-orange p-5 text-white rounded-3xl flex flex-col max-h-74  ">
        <h2 class="title_coordonnées text-3xl text-center pb-4">Mes coordonnées</h2>
        <ul class="flex flex-col gap-4">
            <li>
                <span class="spanContact">Numéro de téléphone : </span>
                <a href="#">+32 04 92 26 10 56</a>
            </li>

            <li>
                <span class="spanContact"> Adresse mail : </span>
                <a href="">patteheureuse@gmail.com </a>
            </li>

            <li>
                <span class="spanContact">  Adresse postale : </span>
                <span>Chaussée de Wavre 412  1300 Wavre, Belgique</span>
            </li>
        </ul>
    </aside>
</section>

</body>
</html>
