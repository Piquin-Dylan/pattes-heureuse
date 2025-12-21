<div>
    <h2>Liste des animaux</h2>

    <ul>
        @foreach($animals as $animal)
            <li>{{$animal->name}}</li>
        @endforeach
    </ul>
</div>
