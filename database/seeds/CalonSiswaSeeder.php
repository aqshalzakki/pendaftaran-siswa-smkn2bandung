<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalonSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('calon_siswa')->insert([
       		[
       			'nisn'   		    => 2002100126,
       			'nama'   		    => "Muhammad Aqshal Zakki",
       			'umur'          => 15,
       			'jenis_kelamin' => 'Laki - Laki',
       			'no_telepon' 	  => 628938473232,
       			'agama'			    => 'Islam',
       			'nilai_name'    => 'name_aqshal.jpg',
            'created_at'    => now()
       		],
       		[
       			'nisn'   		    => 2002112523,
       			'nama'   		    => "Gilang Ramadhan Abidin",
       			'umur'          => 15,
       			'jenis_kelamin' => 'Laki - Laki',
       			'no_telepon' 	  => 628938475021,
       			'agama'			    => 'Islam',
       			'nilai_name'    => 'name_gilang.jpg',
            'created_at'    => now()
       		],
       		[
       			'nisn'   		    => 2002031516,
       			'nama'   		    => "Ditya Dwi Atmoko",
       			'umur'          => 15,
       			'jenis_kelamin' => 'Laki - Laki',
       			'no_telepon' 	  => 628938473232,
       			'agama'			    => 'Islam',
       			'nilai_name'    => 'name_ditya.jpg',
            'created_at'    => now()
       		],
       ]); 
    }
}
