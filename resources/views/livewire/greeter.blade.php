<div>
    <form class="pb-10 flex flex-col gap-5" wire:submit.prevent="submit">
        <label class="flex flex-col" for="name">Nom de l'animal</label>
        <input id="name" class="bg-white text-black rounded-2xl p-2" type="text" wire:model.defer="name"
               placeholder="Nom de l'animal">

        @error('name') <span style="color:red">{{ $message }}</span> @enderror
        <label>Selectionner une race</label>
        <select wire:model="species_name">
            @foreach($species as $specie)
                <option>{{$specie->species_name}}</option>
            @endforeach
        </select>
        <input type="file" wire:model="photo">
        @error('photo') <span style="color:red">{{ $message }}</span> @enderror


        <textarea wire:model.defer="description" placeholder="Description"></textarea>
        @error('description') <span style="color:red">{{ $message }}</span> @enderror

        <button type="submit">Ajouter</button>
    </form>

    <livewire:show-animal></livewire:show-animal>
</div>
