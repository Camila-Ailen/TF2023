<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            // Artesanias
            [
                'category_id' => 1,
                'name' => 'Ceramica',
                'slug'=> Str::slug('Ceramica'),
            ],
            [
                'category_id' => 1,
                'name' => 'Madera',
                'slug'=> Str::slug('Madera'),
            ],
            [
                'category_id' => 1,
                'name' => 'Cuero',
                'slug'=> Str::slug('Cuero'),
            ],

            // Del Campo
            [
                'category_id' => 2,
                'name' => 'Frutas',
                'slug'=> Str::slug('Frutas'),
            ],
            [
                'category_id' => 2,
                'name' => 'Verduras',
                'slug'=> Str::slug('Verduras'),
            ],
            [
                'category_id' => 2,
                'name' => 'Huevos',
                'slug'=> Str::slug('Huevos'),
            ],
            // Caseros
            [
                'category_id' => 3,
                'name' => 'Panificados',
                'slug'=> Str::slug('Panificados'),
            ],
            [
                'category_id' => 3,
                'name' => 'Dulces',
                'slug'=> Str::slug('Dulces'),
            ],
            [
                'category_id' => 3,
                'name' => 'Lacteos',
                'slug'=> Str::slug('Lacteos'),
            ],
            // Plantas
            [
                'category_id' => 4,
                'name' => 'Aromaticas',
                'slug'=> Str::slug('Aromaticas'),
            ],
            [
                'category_id' => 4,
                'name' => 'Suculentas',
                'slug'=> Str::slug('Suculentas'),
            ],
            [
                'category_id' => 4,
                'name' => 'Ornamentales',
                'slug'=> Str::slug('Ornamentales'),
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
