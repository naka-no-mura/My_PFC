<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->insert([
            'id'         =>  1,
            'name'       => 'デフォルト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'id'         =>  2,
            'name'       => '肩',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'id'         =>  3,
            'name'       => '腕',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'id'         =>  4,
            'name'       => '胸',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'id'         =>  5,
            'name'       => '脚',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'id'         =>  6,
            'name'       => '背中',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'id'         =>  7,
            'name'       => '腹',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
