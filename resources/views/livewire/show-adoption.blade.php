<div class="mt-10 max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">
    <h3 class="text-xl font-bold text-regal-orange mb-6">Liste des adoptions</h3>

    <table class="min-w-full border-collapse border border-gray-200">
        <thead class="bg-regal-orange/20">
        <tr>
            <th class="p-3 text-left font-semibold border-b border-gray-300 text-gray-800">ID Animal</th>
            <th class="p-3 text-left font-semibold border-b border-gray-300 text-gray-800">Nom</th>
            <th class="p-3 text-left font-semibold border-b border-gray-300 text-gray-800">Email</th>
            <th class="p-3 text-left font-semibold border-b border-gray-300 text-gray-800">Téléphone</th>
            <th class="p-3 text-left font-semibold border-b border-gray-300 text-gray-800">Date</th>

        </tr>
        </thead>
        <tbody>
        @foreach($adoptions as $adoption)
            <tr class="bg-white hover:bg-regal-orange/10 transition-colors text-gray-800">
                <td class="p-3 border-b border-gray-200">{{$adoption->animal_id}}</td>
                <td class="p-3 border-b border-gray-200">{{$adoption->name}}</td>
                <td class="p-3 border-b border-gray-200">{{$adoption->email}}</td>
                <td class="p-3 border-b border-gray-200">{{$adoption->tel}}</td>
                <td class="p-3 border-b border-gray-200">{{ $adoption->created_at->diffForHumans() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
