<div>

    <form wire:submit.prevent="submit">

        <label for="animal">Prénom</label>
        <input type="text" value="{{$animal->name}}">

        <label for="animal">Prénom</label>
        <input wire:model="name" type="text" placeholder="Ex : Jean">
        @error('')<span class="text-red-500">{{$message}}</span> @enderror

        <label for="animal">Email</label>
        <input wire:model="email" type="text" placeholder="Ex : Jean@gmail.com">

        <label for="animal">Numéros téléphone</label>
        <input wire:model="tel" type="text" placeholder="Ex : 04 93 43 43 21">
        @error('')<span class="text-red-500">{{$message}}</span> @enderror

        <button type="submit">Demande d'adoption</button>
    </form>
</div>
