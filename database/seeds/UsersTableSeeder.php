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
        DB::table('users')->insert([
            'name' => 'sgsUser',
            'email' => 'user@sgs.com',
            'password' => bcrypt('sgsPass'),
        ]);
        DB::table('users')->insert([
            'name' => 'sgsAdmin',
            'email' => 'admin@sgs.com',
            'password' => bcrypt('sgsAdminPass'),
        ]);
    }
}
