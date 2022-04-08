<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'path'       => 'img',
            'name'       => 'default.png',
            'part_id'    => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

        DB::table('part_icons')->insert([
            'path'       => 'img',
            'name'       => 'arm.png',
            'part_id'    => 3,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
