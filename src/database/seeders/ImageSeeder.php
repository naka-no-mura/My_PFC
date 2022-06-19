<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'user_id'    => 1,
            'name'       => 'america_thor.jpeg',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }
}
