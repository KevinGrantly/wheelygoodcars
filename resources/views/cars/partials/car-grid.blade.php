<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($cars as $index => $car)
        <div class="bg-white p-4 rounded shadow
            {{ in_array($index, $featuredIndexes ?? []) ? 'sm:col-span-2' : '' }}">
            <h2 class="text-xl font-bold mb-1">{{ $car->brand }} {{ $car->model }}</h2>
            <p class="text-gray-600 text-sm mb-1">Bouwjaar: {{ $car->production_year }}</p>
            <p class="text-gray-700 font-semibold">€{{ number_format($car->price, 0, ',', '.') }}</p>

            @if($car->tags->count())
                <div class="flex flex-wrap gap-1 mt-2">
                    @foreach($car->tags as $tag)
                        <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            @endif

            <a href="{{ route('cars.show', $car->id) }}"
               class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white text-sm px-4 py-2 rounded">
                Bekijk auto
            </a>
        </div>
    @empty
        <div class="col-span-full text-center text-gray-500">
            Geen auto's gevonden.
        </div>
    @endforelse
</div>
