<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FoodFoodIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_food_icon')->insert([
            'food_id'      => 1,
            'food_icon_id' => 1,
            'created_at'   => new Carbon(),
            'updated_at'   => new Carbon()
        ]);

        DB::table('food_food_icon')->insert([
            'food_id'      => 2,
            'food_icon_id' => 2,
            'created_at'   => new Carbon(),
            'updated_at'   => new Carbon()
        ]);
    }
}
