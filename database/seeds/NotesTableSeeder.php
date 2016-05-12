<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
        	'name' => str_random(10),
        	'user_id' => 1,
        	'content' => str_random(150)
        ]);
    }
}
