<h1>Auto gegevens</h1>
<p><strong>Kenteken:</strong> {{ $car->license_plate }}</p>
<p><strong>Merk:</strong> {{ $car->brand }}</p>
<p><strong>Model:</strong> {{ $car->model }}</p>
<p><strong>Prijs:</strong> €{{ number_format($car->price, 2, ',', '.') }}</p>
<p><strong>Kilometers:</strong> {{ number_format($car->mileage, 0, ',', '.') }} km</p>
@if($car->color)<p><strong>Kleur:</strong> {{ $car->color }}</p>@endif
@if($car->fuel_type)<p><strong>Brandstof:</strong> {{ $car->fuel_type }}</p>@endif
