<div>
    <form class="pb-10" wire:submit.prevent="submit">
        <input type="text" wire:model.defer="name" placeholder="Titre">
        @error('name') <span style="color:red">{{ $message }}</span> @enderror

        <textarea wire:model.defer="description" placeholder="Description"></textarea>
        @error('description') <span style="color:red">{{ $message }}</span> @enderror

        <button type="submit">Ajouter</button>
    </form>

    <section>
        <livewire:show-animal></livewire:show-animal>
    </section>
</div>
