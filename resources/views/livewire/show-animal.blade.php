<div>
    <h2>Liste des animaux</h2>

    <input wire:model.live.debounce="searchAnimal" class="bg-white rounded-2xl text-black p-4"
           placeholder="Recherchez un animal" type="search">
    <ul>
        @foreach($animals as $animal)
            <li wire:key="{{$animal->name}}">{{$animal->name}}</li>
        @endforeach
    </ul>
</div>
