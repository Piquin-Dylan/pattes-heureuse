
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<header>
    <x-nav/>
</header>
<body class="bg-regal-baige">
<x-client.home.sectionPresentation></x-client.home.sectionPresentation>
<x-stats></x-stats>
<x-client.home.sectionSearchAnimal></x-client.home.sectionSearchAnimal>
<x-client.home.sectionVolunteers></x-client.home.sectionVolunteers>
<x-footer></x-footer>
</body>
</html>
