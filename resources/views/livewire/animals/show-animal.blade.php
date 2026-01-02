<div>
    <h2 class="text-2xl font-semibold mb-4">Liste des animaux</h2>

    <input wire:model.live.debounce.300ms="searchAnimal"
           class="bg-white rounded-xl text-black p-3 w-full max-w-md shadow-sm border focus:outline-none focus:ring-2 focus:ring-[#F38B2D]"
           placeholder="Rechercher un animal" type="search">
    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pt-6">
        @foreach($animals as $animal)
            <li wire:key="{{ $animal->id }}"
                class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden"><a
                    href="{{ route('show-animal', $animal->id) }}">
                    <img src="{{ asset('storage/' . $animal->photo_path) }}" alt="{{ $animal->name }}"
                         class="w-full h-40 object-cover">
                </a>
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">
                        {{ $animal->name }}</h3>

                    <div class="mt-4 flex flex-col gap-2">
                        <a href="{{ route('client.descriptionAnimal', $animal->id) }}"
                           class="bg-[#F38B2D] hover:bg-[#d97920] text-white py-2 rounded-xl text-sm font-medium transition">
                            Adopter
                        </a>

                        <button
                            wire:confirm="Voulez-vous vraiment supprimer cet animal ?"
                            wire:click="delete({{ $animal->id }})"
                            class="text-red-500 hover:text-red-700 text-sm">
                            Supprimer
                        </button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
