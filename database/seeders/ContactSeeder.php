<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Contact::create([
                'user_id' => rand(1, 2), // Reemplaza 20 con el máximo ID de tus usuarios
                'category_id' => rand(1, 3), // Reemplaza 5 con el máximo ID de tus categorías
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'email' => $faker->unique()->safeEmail,
            ]);
        }
    }
}