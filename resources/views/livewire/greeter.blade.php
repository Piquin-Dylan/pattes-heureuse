<form wire:submit.prevent="submit" class="pb-10 flex flex-col gap-5">
    <label>Nom de l'animal</label>
    <input type="text" wire:model.defer="name" placeholder="Nom de l'animal">
    @error('name') <span style="color:red">{{ $message }}</span> @enderror

    <label>Selectionner une espèce</label>
    <select wire:model.live="species_name">
        <option value="">-- Choisir une espèce --</option>
        @foreach($species as $specie)
            <option value="{{$specie->id}}">{{$specie->species_name}}</option>
        @endforeach
    </select>

    <label>Selectionner la race</label>
    <select wire:mode.livel="race_name">
        <option value="">-- Choisir une race --</option>
        @foreach($race as $r)
            <option value="{{$r->id}}">{{$r->race_name}}</option>
        @endforeach
    </select>

    <input type="file" wire:model="photo">
    @error('photo') <span style="color:red">{{ $message }}</span> @enderror

    <textarea wire:model.defer="description" placeholder="Description"></textarea>
    @error('description') <span style="color:red">{{ $message }}</span> @enderror

    <button type="submit">Ajouter</button>


    <livewire:show-animal></livewire:show-animal>
</form>
