<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $animal->name }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-regal-baige">
<x-nav />

<section class="flex justify-center py-10">
    <div class="bg-white rounded-2xl shadow-lg w-full max-w-4xl p-6">

        <h1 class="text-2xl font-bold text-center mb-6">
            {{ $animal->name }}
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex justify-center">
                <img
                    src="{{ asset('storage/' . $animal->photo_path) }}"
                    alt="{{ $animal->name }}"
                    class="w-64 h-64 object-cover rounded-xl shadow"
                >
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 rounded-lg">
                    <tbody class="divide-y divide-gray-200">
                    <tr>
                        <th class="px-4 py-3 text-left bg-gray-50 font-medium">Nom</th>
                        <td class="px-4 py-3">{{ $animal->name }}</td>
                    </tr>
                    <tr>
                        <th class="px-4 py-3 text-left bg-gray-50 font-medium">Âge</th>
                        <td class="px-4 py-3">{{ $animal->age }} ans</td>
                    </tr>
                    <tr>
                        <th class="px-4 py-3 text-left bg-gray-50 font-medium">Espèce</th>
                        <td class="px-4 py-3">{{ $animal->species->species_name }}</td>
                    </tr>
                    <tr>
                        <th class="px-4 py-3 text-left bg-gray-50 font-medium">Pelage</th>
                        <td class="px-4 py-3">{{ $animal->coats->name }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-lg font-semibold mb-2">Description</h2>
            <p class="text-gray-700 leading-relaxed">
                {{ $animal->description }}
            </p>
        </div>

        <div class="mt-6 flex justify-center">
            <button class="cta2">
                <a href="#" class="" data-toggle="modal" data-target="#ModalCreate"></a>
                Adopter
            </button>
        </div>

    </div>
</section>

<x-footer/>
</body>
</html>
