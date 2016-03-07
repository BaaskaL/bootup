<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keywords = json_encode(['bootup']);
        DB::table('roles')->insert([
			['title'=>'Admin'],
			['title'=>'User'],
		]);
    }
}