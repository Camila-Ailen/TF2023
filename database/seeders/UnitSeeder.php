<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            [
                'name' => 'Kilogramo',
                'symbol' => 'kg',
            ],
            [
                'name' => 'Gramo',
                'symbol' => 'g',
            ],
            [
                'name' => 'Litro',
                'symbol' => 'l',
            ],
            [
                'name' => 'Pieza',
                'symbol' => 'pcs',
            ],
        ];

        foreach ($units as $unit) {
            Unit::factory(1)->create($unit);
        }
    }
}
