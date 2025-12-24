<div>
    <h2>Liste des animaux</h2>

    <input wire:model.live.debounce="searchAnimal" class="bg-white rounded-2xl text-black p-4"
           placeholder="Recherchez un animal" type="search">

    <ul class="flex flex-row gap-6 pt-4">
        @foreach($animals as $animal)
            <a href="{{route('show-animal',$animal->id)}}">
                <li class="bg-white text-2xl  text-black p-5 rounded-2xl w-32 text-center"
                    wire:key="{{$animal->id}}">
                    <img src="{{ asset('storage/' . $animal->photo_path) }}" alt="{{ $animal->name }}" width="100">
                    <div>{{ $animal->name }}</div>
                    <button wire:confirm="Voulez vous vraiment supprimer cette animal ?"
                            wire:click="delete({{$animal->id}})">Delete
                    </button>
                </li>
            </a>
        @endforeach
    </ul>
</div>
