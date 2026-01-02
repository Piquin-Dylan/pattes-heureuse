<div class="py-10">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold text-center text-regal-orange mb-8">Bénévoles existants</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($volunteers as $volunteer)
                <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center text-center transition-transform hover:scale-105">
                    @if($volunteer->photo_path)
                        <img src="{{ asset('storage/' . $volunteer->photo_path) }}"
                             alt="{{ $volunteer->name }}"
                             class="w-24 h-24 rounded-full object-cover mb-3 border-2 border-gray-200">
                    @else
                        <div class="w-24 h-24 rounded-full bg-gray-100 mb-3 flex items-center justify-center text-gray-400">
                            N/A
                        </div>
                    @endif
                    <h3 class="font-bold text-lg text-gray-800">{{ $volunteer->name }}</h3>
                    <p class="text-gray-600">{{ $volunteer->email }}</p>
                    @if($volunteer->tel)
                        <p class="text-gray-600">{{ $volunteer->tel }}</p>
                    @endif
                    @if($volunteer->role)
                        <span class="mt-2 px-3 py-1 text-sm bg-regal-orange text-white font-semibold rounded-full">
                            {{ $volunteer->role }}
                        </span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
