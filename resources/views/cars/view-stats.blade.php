<x-app-layout>
    <div class="py-12 max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Statistieken voor {{ $car->brand }} {{ $car->model }}</h1>

        <p><strong>Totale views:</strong> {{ $car->views }}</p>
        <p><strong>Gemiddelde views vergelijkbare auto's:</strong> {{ $similarCarsAvgViews }}</p>
        <p><strong>Populariteitsscore:</strong> {{ $popularityScore }}%</p>
        <p><strong>Potentiële kopers:</strong> {{ $potentialBuyers }}</p>
        <p><strong>Percentage kopers t.o.v. views:</strong> {{ $viewsPercentage }}%</p>

        <div class="mt-8">
            <h2 class="text-lg font-semibold mb-2">Dagelijkse views (gesimuleerd):</h2>
            <ul class="list-disc pl-6">
                @foreach($dailyViews as $date => $views)
                    <li>{{ $date }}: {{ $views }} views</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <a href="{{ route('cars.index') }}" class="text-orange-600 underline">← Terug naar mijn aanbod</a>
        </div>
    </div>
</x-app-layout>
    