<?php

use Illuminate\Database\Seeder;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'gokul',
            'email' => 'gokul@greefitech.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Vijay',
            'email' => 'vijay@greefitech.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
    