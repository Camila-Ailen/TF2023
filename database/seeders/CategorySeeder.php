<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Artesanias',
                'slug'=> Str::slug('Artesanias'),
                'icon'=> '<i class="fa-solid fa-hand-holding-hand"></i>'
            ],
            [
                'name' => 'Del Campo',
                'slug'=> Str::slug('Del Campo'),
                'icon'=> '<i class="fa-solid fa-carrot"></i>'
            ],
            [
                'name' => 'Caseros',
                'slug'=> Str::slug('Caseros'),
                'icon'=> '<i class="fa-solid fa-cookie-bite"></i>'
            ],
            [
                'name' => 'Plantas',
                'slug'=> Str::slug('Plantas'),
                'icon' => '<i class="fa-brands fa-pagelines"></i>'
            ],
        ];

        foreach ($categories as $category) {
            Category::factory(1)->create($category);
        }

    }
}
