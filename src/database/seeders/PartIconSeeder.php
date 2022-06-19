<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PartIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('part_icons')->insert([
            'name'       => 'default.png',
            'part_id'    => 1,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('part_icons')->insert([
            'name'       => 'shoulder.png',
            'part_id'    => 2,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('part_icons')->insert([
            'name'       => 'arm.png',
            'part_id'    => 3,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('part_icons')->insert([
            'name'       => 'pectoral.png',
            'part_id'    => 4,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('part_icons')->insert([
            'name'       => 'leg.png',
            'part_id'    => 5,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('part_icons')->insert([
            'name'       => 'spine.png',
            'part_id'    => 6,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('part_icons')->insert([
            'name'       => 'abdominal.png',
            'part_id'    => 7,
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }
}
