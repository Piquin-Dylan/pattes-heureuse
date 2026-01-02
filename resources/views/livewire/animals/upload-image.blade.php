<div>
    <input type="file" wire:model="photo">

    @error('photo')
    <span class="error">{{ $message }}</span>
    @enderror

    @if($photo)
        <img src="{{ $photo->temporaryUrl() }}" width="200" alt="Preview">
    @endif
</div>
