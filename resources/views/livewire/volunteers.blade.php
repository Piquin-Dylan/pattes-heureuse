<div class="py-10">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-regal-orange mb-6">Créer un bénévole</h2>

        @if (session()->has('message'))
            <div class="mb-4 bg-green-600 text-white p-3 rounded">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nom</label>
                <input type="text" wire:model.defer="name" placeholder="Nom du bénévole"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" wire:model.defer="email" placeholder="Email"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('email') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Téléphone</label>
                <input type="tel" wire:model.defer="tel" placeholder="Téléphone"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('tel') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Photo</label>
                <input type="file" wire:model="image"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-regal-orange">
                @error('image') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                        class="w-full bg-regal-orange text-white font-bold py-3 rounded-xl hover:bg-orange-600 transition-colors duration-300">
                    Créer le bénévole
                </button>
            </div>
        </form>

        <div class="mt-16">
            <h3 class="text-xl font-bold text-regal-orange mb-6">Liste des bénévoles</h3>
            <livewire:show-volunteers></livewire:show-volunteers>
        </div>
    </div>
</div>
