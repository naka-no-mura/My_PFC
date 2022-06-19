<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Carbon\Carbon;

class PartHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('part_histories')->insert([
            'user_id'    => 1,
            'part_id'    => 4,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('part_histories')->insert([
            'user_id'    => 1,
            'part_id'    => 2,
            'created_at' => new Carbon('-1 day'),
            'updated_at' => new Carbon('-1 day')
        ]);

        DB::table('part_histories')->insert([
            'user_id'    => 1,
            'part_id'    => 6,
            'created_at' => new Carbon('-2 day'),
            'updated_at' => new Carbon('-2 day')
        ]);

        DB::table('part_histories')->insert([
            'user_id'    => 1,
            'part_id'    => 5,
            'created_at' => new Carbon('-3 day'),
            'updated_at' => new Carbon('-3 day')
        ]);

        DB::table('part_histories')->insert([
            'user_id'    => 1,
            'part_id'    => 3,
            'created_at' => new Carbon('-4 day'),
            'updated_at' => new Carbon('-4 day')
        ]);
    }
}
