<div class="py-20 bg-regal-baige">
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-regal-orange mb-6">Formulaire d'adoption</h2>

        <form wire:submit.prevent="submit" class="space-y-5">

            <div>
                <label class="block text-gray-700 font-semibold mb-1" for="animal">Animal à adopter</label>
                <input type="text" id="animal" value="{{ $animal->name }}" disabled class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100 text-gray-800">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1" for="name">Prénom</label>
                <input wire:model="name" id="name" type="text" placeholder="Ex : Jean" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('name')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1" for="email">Email</label>
                <input wire:model="email" id="email" type="email" placeholder="Ex : jean@gmail.com" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('email')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1" for="tel">Numéro de téléphone</label>
                <input wire:model="tel" id="tel" type="text" placeholder="Ex : 04 99 38 27 64" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('tel')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <button type="submit" class="w-full bg-regal-orange text-white font-bold py-3 rounded-xl hover:bg-orange-600 transition-colors duration-300">
                Envoyer la demande
            </button>

        </form>
    </div>
</div>
