<div>
    <h2 class="text-2xl font-bold mt-8 mb-4">Bénévoles existants</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($volunteers as $volunteer)
            <div class="bg-gray-800 rounded-xl shadow p-4 flex flex-col items-center text-center">
                @if($volunteer->photo_path)
                    <img src="{{ asset('storage/' . $volunteer->photo_path) }}"
                         alt="{{ $volunteer->name }}"
                         class="w-24 h-24 rounded-full object-cover mb-2 border-2 border-gray-600">
                @else
                    <div class="w-24 h-24 rounded-full bg-gray-700 mb-2 flex items-center justify-center text-gray-400">
                        N/A
                    </div>
                @endif
                <h3 class="font-bold text-lg">{{ $volunteer->name }}</h3>
                <p class="text-gray-300">{{ $volunteer->email }}</p>
                @if($volunteer->tel)
                    <p class="text-gray-300">{{ $volunteer->tel }}</p>
                @endif
                @if($volunteer->role)
                    <span class="mt-1 px-2 py-1 text-sm bg-regal-orange text-black rounded">{{ $volunteer->role }}</span>
                @endif
            </div>
        @endforeach
    </div>
</div>
