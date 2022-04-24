<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
          'name' => 'test',
          'email' => 'test@test.com',
          'password' => 'password',
          'created_at' => new \DateTime(),
          'updated_at' => new \DateTime()
        ]);
    }
}