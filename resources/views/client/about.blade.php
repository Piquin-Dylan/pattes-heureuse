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
<x-client.about.sectionPresentationRefuge></x-client.about.sectionPresentationRefuge>
<x-client.about.sectionHistory></x-client.about.sectionHistory>
<x-client.about.sectionTeam></x-client.about.sectionTeam>
<x-footer></x-footer>
</body>
</html>
