<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
        	'nama'		=> 'Pak Sukarna',
        	'username'	=> 'sukarna',
        	'password'	=> Hash::make('sukarna'),
            'created_at'=> now()
        ]);
    }
}
