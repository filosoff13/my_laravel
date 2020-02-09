<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'User1',
                'email' => 'User1@example.com',
                'password' => bcrypt(\Illuminate\Support\Str::random(16)),
            ],
            [
                'name' => 'User2',
                'email' => 'User2@example.com',
                'password' => bcrypt('123'),
            ]

        ];
        \Illuminate\Support\Facades\DB::table('users')->insert($data);
    }
}
