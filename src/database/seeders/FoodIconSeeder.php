<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FoodIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_icons')->insert([
            'id'           => 1,
            'name'         => 'boiled egg',
            'created_at'   => new Carbon(),
            'updated_at'   => new Carbon()
        ]);

        DB::table('food_icons')->insert([
            'id'           => 2,
            'name'         => 'skinless chicken',
            'created_at'   => new Carbon(),
            'updated_at'   => new Carbon()
        ]);
    }
}
