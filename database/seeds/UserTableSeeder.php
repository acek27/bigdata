<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('renja12345'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'kominfo',
            'email' => 'kominfo@gmail.com',
            'password' => Hash::make('kominfo12345'),
            'role_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'bupati',
            'email' => 'bupati@gmail.com',
            'password' => Hash::make('bupati12345'),
            'role_id' => 3,
        ]);
    }
}
