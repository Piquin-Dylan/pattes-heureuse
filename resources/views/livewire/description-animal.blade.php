<div>
    <h1>Bonjour {{$this->animal->name}}</h1>
    <span>{{$this->animal->description}}</span>
    <span>{{$this->animal->age}} ans</span>
    <span>{{$this->animal->species->species_name}}</span>
    <img src="{{ asset('storage/' . $animal->photo_path) }}" alt="{{ $animal->name }}" width="100">
</div>
