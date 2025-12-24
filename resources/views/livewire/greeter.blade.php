<form wire:submit.prevent="submit" class="pb-10 flex flex-col gap-5">
    <label>Nom de l'animal</label>
    <input type="text" wire:model.defer="name" placeholder="Nom de l'animal">
    @error('name') <span class="color:red">{{ $message }}</span> @enderror

    <label>Selectionner une espèce</label>
    <select wire:model.live="species_name">
        <option value="">-- Choisir une espèce --</option>
        @foreach($species as $specie)
            <option value="{{$specie->id}}">{{$specie->species_name}}</option>
        @endforeach
    </select>

    <label>Selectionner la race</label>
    <select wire:mode.live="race_name">
        <option value="">-- Choisir une race --</option>
        @foreach($race as $r)
            <option value="{{$r->id}}">{{$r->race_name}}</option>
        @endforeach
    </select>
    <label>Sélectionner un pelage</label>

    <select wire:model.live="coats_species">
        <option value="">-- Choisir un pelage --</option>
        @foreach($coats_species as $coat)
            <option value="{{ $coat->id }}">{{ $coat->name }}</option>
        @endforeach
    </select>


    <label for="age">Age de l'animal</label>
    <input wire:model="age" type="number" name="age" id="age" placeholder="Entrer l'age de l'animal">
    @error('age')<span class="error">{{$message}}</span>@enderror

    <input type="file" wire:model="photo">
    @error('photo') <span>{{ $message }}</span> @enderror

    <textarea wire:model.defer="description" placeholder="Description"></textarea>
    @error('description') <span>{{ $message }}</span> @enderror

    <button type="submit">Ajouter</button>

    <livewire:show-animal></livewire:show-animal>
</form>
