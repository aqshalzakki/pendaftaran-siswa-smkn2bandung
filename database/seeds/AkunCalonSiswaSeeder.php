<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunCalonSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('akun_calon_siswa')->insert([
        	[
        		'id_calon'	 => 1,
	        	'email'		 => 'kecoatempur2@gmail.com',
	        	'password'	 => Hash::make('aqshal'),
                'created_at' => now()
        	],
            [
                'id_calon'   => 2,
                'email'      => 'gilangramadhan@gmail.com',
                'password'   => Hash::make('gilang'),
                'created_at' => now()
            ],
        	[
        		'id_calon'	 => 3,
	        	'email'		 => 'dityadwiatmoko@gmail.com',
	        	'password'	 => Hash::make('ditya'),
        	    'created_at' => now()
            ]
        ]);
    }
}
