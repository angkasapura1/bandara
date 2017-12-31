<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=4; $i <= 7; $i++) { 
	        DB::table('users')->insert([
	            'name' => 'angkasapura'.$i,
	            'username' => 'angkasapura'.$i,
	            'password' => bcrypt('angkasapura'.$i),
                'created_at' => date('Y-m-d h:i:s'),
	            'remember_token' => csrf_token()
	        ]);
    	}
    }
}
