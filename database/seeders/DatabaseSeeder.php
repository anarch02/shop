<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory(5)->create();
        \App\Models\Subcategory::factory(10)->create();
        \App\Models\Product::factory(100)->create();

        \App\Models\AdminUser::factory()->create([
            'name' => 'Test Admin',
            'email' => 'test@admin.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
