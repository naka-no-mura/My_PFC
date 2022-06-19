<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'id'           => 1,
            'user_id'      => 1,
            'name'         => 'ゆで卵',
            'protein'      => 7.38,
            'fat'          => 6.18,
            'carbohydrate' => 0.18,
            'created_at'   => new Carbon(),
            'updated_at'   => new Carbon()
        ]);

        DB::table('foods')->insert([
            'id'           => 2,
            'user_id'      => 1,
            'name'         => '鶏肉（皮無し）',
            'protein'      => 22.3,
            'fat'          => 1.5,
            'carbohydrate' => 0,
            'created_at'   => new Carbon(),
            'updated_at'   => new Carbon()
        ]);
    }
}
