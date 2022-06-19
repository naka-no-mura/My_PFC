<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'my_pfc',
          'email' => 'my_pfc@test.com',
          'password' => 'password',
          'created_at' => new Carbon(),
          'updated_at' => new Carbon()
        ]);

        DB::table('users')->insert([
          'name' => 'test',
          'email' => 'test@test.com',
          'password' => 'password',
          'created_at' => new Carbon(),
          'updated_at' => new Carbon()
        ]);
    }
}
