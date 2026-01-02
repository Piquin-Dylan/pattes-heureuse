<div class="py-10">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-regal-orange mb-6">Créer une fiche d'animal</h2>

        <form wire:submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nom de l'animal</label>
                <input type="text" wire:model.defer="name" placeholder="Nom de l'animal" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Âge</label>
                <input wire:model.defer="age" type="number" placeholder="Entrer l'âge" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('age')<span class="text-red-500 text-sm mt-1 block">{{$message}}</span>@enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Espèce</label>
                <select wire:model.live="species_name" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                    <option value="">-- Choisir une espèce --</option>
                    @foreach($species as $specie)
                        <option value="{{$specie->id}}">{{$specie->species_name}}</option>
                    @endforeach
                </select>
                @error('species_name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Race</label>
                <select wire:model.live="race_id" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                    <option value="">-- Choisir une race --</option>
                    @foreach($race as $r)
                        <option value="{{$r->id}}">{{$r->race_name}}</option>
                    @endforeach
                </select>
                @error('race_id') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Pelage</label>
                <select wire:model.live="coats_species_id" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                    <option value="">-- Choisir un pelage --</option>
                    @foreach($coats_species as $coat)
                        <option value="{{ $coat->id }}">{{ $coat->name }}</option>
                    @endforeach
                </select>
                @error('coats_species_id') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-gray-700 font-semibold mb-1">Photo</label>
                <input type="file" wire:model="photo" class="w-full text-black">
                @error('photo') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-gray-700 font-semibold mb-1">Description</label>
                <textarea wire:model.defer="description" placeholder="Description" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange"></textarea>
                @error('description') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="md:col-span-2">
                <button type="submit" class="w-full bg-regal-orange text-white font-bold py-3 rounded-xl hover:bg-orange-600 transition-colors duration-300">Ajouter</button>
            </div>

        </form>

        <div class="mt-16">
            <h3 class="text-xl font-bold text-regal-orange mb-6">Liste des animaux</h3>
            <livewire:show-animal></livewire:show-animal>
        </div>
    </div>
</div>
