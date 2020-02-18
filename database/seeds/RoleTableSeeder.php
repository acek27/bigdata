<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1',
            'role_name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'role_name' => 'opd',
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'role_name' => 'bupati',
        ]);
    }
}
