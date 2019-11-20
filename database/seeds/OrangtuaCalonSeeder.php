<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrangtuaCalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orangtua_calon')->insert([
        	[
        		'id_calon'	=> 1,
        		'nama_ayah'	=> "Mochamad Yasin",
        		'nama_ibu'	=> "Yulia Watiningsih"
        	],
        	[
        		'id_calon'	=> 2,
        		'nama_ayah'	=> "Rida Abidin",
            	'nama_ibu'	=> 'Siti nurhasanah'
        	],
        	[
        		'id_calon'	=> 3,
        		'nama_ayah' => "Asep Sunandar",
            	'nama_ibu'	=> 'Marwiah SPD'
        	]
        ]);
    }
}
