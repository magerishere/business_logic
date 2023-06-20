<?php

namespace Database\Seeders;

use App\Enums\Platforms;
use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Platforms::cases() as $platform) {
            Platform::factory()->create([
                'id' => $platform->value,
            ]);
        }
    }
}
