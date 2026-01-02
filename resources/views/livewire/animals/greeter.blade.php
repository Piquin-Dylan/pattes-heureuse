<form wire:submit.prevent="submit" class="pb-10 flex flex-col gap-5">
    <label>Nom de l'animal</label>
    <input type="text" wire:model.defer="name" placeholder="Nom de l'animal">
    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

    <label>Selectionner une espèce</label>
    <select wire:model.live="species_name">
        <option value="">-- Choisir une espèce --</option>
        @foreach($species as $specie)
            <option value="{{$specie->id}}">{{$specie->species_name}}</option>
        @endforeach
    </select>
    @error('species_name') <span class="text-red-500">{{ $message }}</span> @enderror

    <label>Selectionner la race</label>
    <select wire:model.live="race_id">
        <option value="">-- Choisir une race --</option>
        @foreach($race as $r)
            <option value="{{$r->id}}">{{$r->race_name}}</option>
        @endforeach
    </select>
    @error('race_id') <span class="text-red-500">{{ $message }}</span> @enderror

    <label>Sélectionner un pelage</label>
    <select wire:model.live="coats_species_id">
        <option value="">-- Choisir un pelage --</option>
        @foreach($coats_species as $coat)
            <option value="{{ $coat->id }}">{{ $coat->name }}</option>
        @endforeach
    </select>
    @error('coats_species_id') <span class="text-red-500">{{ $message }}</span> @enderror

    <label>Age de l'animal</label>
    <input wire:model.defer="age" type="number" placeholder="Entrer l'âge">
    @error('age')<span class="text-red-500">{{$message}}</span>@enderror

    <label>Photo</label>
    <input type="file" wire:model="photo">
    @error('photo') <span class="text-red-500">{{ $message }}</span> @enderror

    <label>Description</label>
    <textarea wire:model.defer="description" placeholder="Description"></textarea>
    @error('description') <span class="text-red-500">{{ $message }}</span> @enderror

    <button type="submit" class="cta2">Ajouter</button>

    <livewire:show-animal></livewire:show-animal>
</form>
