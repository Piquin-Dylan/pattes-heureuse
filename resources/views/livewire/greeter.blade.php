<div>
<form class="pb-10" wire:submit.prevent="submit">
    <input type="text" wire:model.defer="name" placeholder="Titre">
    @error('name') <span style="color:red">{{ $message }}</span> @enderror

    <input type="file" wire:model="photo">
    @error('photo') <span style="color:red">{{ $message }}</span> @enderror
    @if ($photo)
        <img src="{{ $photo->temporaryUrl() }}" width="150">
    @endif

    <textarea wire:model.defer="description" placeholder="Description"></textarea>
    @error('description') <span style="color:red">{{ $message }}</span> @enderror

    <button type="submit">Ajouter</button>
</form>

    <livewire:show-animal></livewire:show-animal>
</div>
