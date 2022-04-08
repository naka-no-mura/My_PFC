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
            'name'       => 'デフォルト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'name'       => '肩',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'name'       => '腕',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'name'       => '胸',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'name'       => '脚',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'name'       => '背中',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('parts')->insert([
            'name'       => '腹',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
