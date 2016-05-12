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
        	'name' => 'Orcun',
        	'email' => 'otacioglu.orcun@gmail.com',
        	'password' => bcrypt('password')
        ]);
    }
}
