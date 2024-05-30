<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'adminwisata',
            'email' => 'admin@wisata.com',
            'password' => Hash::make('adminku1'),
        ]);

        //category factory 2
        Category::factory(2)->create();

        //product factory 3
        Product::factory(100)->create();
    }
}
