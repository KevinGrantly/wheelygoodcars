<x-app-layout>
    <div class="py-12 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Tags aanpassen voor {{ $car->brand }} {{ $car->model }}</h1>

        <form action="{{ route('cars.update-tags', $car) }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                @foreach($allTags as $tag)
                    <label class="flex items-center">
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            class="mr-2"
                            {{ in_array($tag->id, $selectedTagIds) ? 'checked' : '' }}>
                        {{ $tag->name }}
                    </label>
                @endforeach
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded">
                    Opslaan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
