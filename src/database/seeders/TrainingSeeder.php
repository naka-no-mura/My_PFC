<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            'id'         => 1,
            'user_id'    => 1,
            'menu'       => 'タンベルプレス',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('trainings')->insert([
            'id'         => 2,
            'user_id'    => 1,
            'menu'       => 'ハンマーカール',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('trainings')->insert([
            'id'         => 3,
            'user_id'    => 1,
            'menu'       => 'サイドレイズ',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('trainings')->insert([
            'id'         => 4,
            'user_id'    => 1,
            'menu'       => '膝コロ',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('trainings')->insert([
            'id'         => 5,
            'user_id'    => 1,
            'menu'       => 'ワンハンドロー',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);

        DB::table('trainings')->insert([
            'id'         => 6,
            'user_id'    => 1,
            'menu'       => 'スクワット',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }
}
