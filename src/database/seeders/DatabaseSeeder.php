<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(PartSeeder::class);
        $this->call(PartIconSeeder::class);
        $this->call(PartHistorySeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(FoodIconSeeder::class);
        $this->call(FoodFoodIconSeeder::class);
        $this->call(FoodHistorySeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(TrainingHistorySeeder::class);
    }
}
