<div class="max-w-5xl mx-auto p-8 bg-gray-900 rounded-xl shadow-lg text-white">
    <h1 class="text-3xl font-bold mb-6">Créer un bénévole</h1>

    @if (session()->has('message'))
        <div class="mb-4 bg-green-600 text-white p-3 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="flex flex-col gap-4">
        <input wire:model="name" type="text" placeholder="Nom"
               class="p-3 rounded border border-gray-700 bg-gray-800 text-white">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

        <input wire:model="email" type="email" placeholder="Email"
               class="p-3 rounded border border-gray-700 bg-gray-800 text-white">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

        <input wire:model="tel" type="tel" placeholder="Téléphone"
               class="p-3 rounded border border-gray-700 bg-gray-800 text-white">
        @error('tel') <span class="text-red-500">{{ $message }}</span> @enderror



        <input type="file" wire:model="image" class="p-2 rounded border border-gray-700 bg-gray-800 text-white">
        @error('image') <span class="text-red-500">{{ $message }}</span> @enderror

        <button type="submit"
                class="mt-4 bg-regal-orange hover:bg-orange-700 text-black font-bold py-3 rounded-lg transition-all">
            Créer le bénévole
        </button>
    </form>

        <livewire:show-volunteers></livewire:show-volunteers>
</div>
