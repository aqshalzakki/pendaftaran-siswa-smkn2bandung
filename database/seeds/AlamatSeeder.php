<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alamat')->insert([
        	[
        		'id_calon'  => 1,
        		'alamat'    => 'Jalan Sukagalih, Gang Sukabakti 2 Rt07-03 No.646 Kecamatan Sukajadi Kelurahan Sukabungah'
        	],
        	[
        		'id_calon'  => 2,
        		'alamat'    => 'Jalan Mentor, Gang Haji Hambali Rt05-07 No.3 Kecamatan Cicendo Kelurahan Sukaraja'
        	],
        	[
        		'id_calon'  => 3,
        		'alamat'    => 'Jalan Padasuka, Gang Asep berlian Rt01-04 No.24 Kecamatan Padasuka Kelurahan Sukamamang'
        	]
        ]);
    }
}
