<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function fillTestData($num = 10)
    {
        for ($i = 0; $i < $num; $i++) {
            Category::create(['user_id' => rand(1, 2), 'name' => $i . ' - Category', 'description' => $i . ' - Category',]);
        }
    }
    public function run(): void
    {
        Category::create(['user_id' => rand(1, 2), 'name' => 'Work', 'description' => 'Work Contacts',]);
        Category::create(['user_id' => rand(1, 2), 'name' => 'Family', 'description' => 'Family Contacts',]);
        Category::create(['user_id' => rand(1, 2), 'name' => 'Friends', 'description' => 'Friends Contacts',]);

        /* Warning */
        $this->fillTestData(500);
    }
}
