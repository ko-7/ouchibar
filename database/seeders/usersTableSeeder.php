<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ←これを追加

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'     => 'testuser1',
                'email'    => 'user1@test.test',
                'password' => bcrypt('user1pass'),
                'admin'    => '0',
            ],
            [
                'name'     => 'testuser2',
                'email'    => 'user2@test.test',
                'password' => bcrypt('user2pass'),
                'admin'    => '0',
            ],
            [
                'name'     => 'testuser3',
                'email'    => 'user3@test.test',
                'password' => bcrypt('user3pass'),
                'admin'    => '0',
            ]
        ]);
    }
}
