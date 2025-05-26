<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'Sportief', 'Familie', 'Budget', 'Luxe', 'Zuinig',
            'Automaat', 'Handgeschakeld', 'Elektrisch', 'Benzine', 'Diesel',
            'Zwart', 'Wit', 'Grijs', 'Rood', 'Blauw',
            'SUV', 'Hatchback', 'Stationwagen', 'Cabrio', 'Sedan'
        ];

        foreach ($tags as $index => $name) {
            Tag::create([
                'name' => $name,
                'priority' => rand(1, 10)
            ]);
        }
    }
}
