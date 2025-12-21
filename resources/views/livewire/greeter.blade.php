
<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model.defer="title" placeholder="Titre">
        @error('title') <span style="color:red">{{ $message }}</span> @enderror

        <textarea wire:model.defer="description" placeholder="Description"></textarea>
        @error('description') <span style="color:red">{{ $message }}</span> @enderror

        <button type="submit">Ajouter</button>
    </form>
</div>
