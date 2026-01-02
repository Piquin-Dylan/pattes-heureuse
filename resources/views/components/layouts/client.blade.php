<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Animal Adoption' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-regal-baige min-h-screen flex flex-col">

<header>
    <x-nav/>
</header>

<main class="flex-1">
    {{ $slot }}
</main>

<footer class="mt-auto">
    <x-footer/>
</footer>

</body>
</html>
