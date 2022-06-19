<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FoodHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_histories')->insert([
            'user_id'    => 1,
            'food_id'    => 1,
            'count'      => 3,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('food_histories')->insert([
            'user_id'    => 1,
            'food_id'    => 2,
            'count'      => 1,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }
}
