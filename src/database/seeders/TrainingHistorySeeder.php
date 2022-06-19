<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TrainingHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_histories')->insert([
            'user_id'     => 1,
            'training_id' => 1, // ダンベルプレス
            'weight'      => 17.5,
            'repetition'  => 12,
            'set'         => 3,
            'created_at'  => new Carbon(),
            'updated_at'  => new Carbon()
        ]);

        DB::table('training_histories')->insert([
            'user_id'     => 1,
            'training_id' => 3, // サイドレイズ
            'weight'      => 5,
            'repetition'  => 15,
            'set'         => 3,
            'created_at'  => new Carbon('-1 day'),
            'updated_at'  => new Carbon('-1 day')
        ]);

        DB::table('training_histories')->insert([
            'user_id'     => 1,
            'training_id' => 5, // ワンハンドロー
            'weight'      => 17.5,
            'repetition'  => 15,
            'set'         => 3,
            'created_at'  => new Carbon('-2 day'),
            'updated_at'  => new Carbon('-2 day')
        ]);

        DB::table('training_histories')->insert([
            'user_id'     => 1,
            'training_id' => 6, // スクワット
            'weight'      => 0,
            'repetition'  => 15,
            'set'         => 3,
            'created_at'  => new Carbon('-3 day'),
            'updated_at'  => new Carbon('-3 day')
        ]);

        DB::table('training_histories')->insert([
            'user_id'     => 1,
            'training_id' => 3, // ハンマーカール
            'weight'      => 12.5,
            'repetition'  => 12,
            'set'         => 3,
            'created_at'  => new Carbon('-4 day'),
            'updated_at'  => new Carbon('-4 day')
        ]);
    }
}
