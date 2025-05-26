<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
            {{-- ✅ Progress bar stap 3 van 3 --}}
            <x-progress-bar :currentStep="3" :totalSteps="3" />

            <h1 class="text-2xl font-bold mb-4">Stap 3: Selecteer tags</h1>

            <form action="{{ route('cars.finalize') }}" method="POST">
                @csrf

                <p class="mb-2"><strong>Auto:</strong> {{ $carData['brand'] }} {{ $carData['model'] }}</p>
                <p class="mb-4"><strong>Kenteken:</strong> {{ $carData['license_plate'] }}</p>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                    @foreach($allTags as $tag)
                        <label class="flex items-center">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="mr-2">
                            {{ $tag->name }}
                        </label>
                    @endforeach
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded font-semibold">
                        Afronden
                    </button>
                </div>
            </form>
        </div>
    </div>  
</x-app-layout>
