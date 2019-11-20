<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_pendaftaran')->insert([
        	[
        		'id_calon'	=> 1,
        		'id_status' => 1,
        		'id_staff'  => 1
        	],
        	[
        		'id_calon'	=> 2,
        		'id_status' => 3,
        		'id_staff'  => 1

        	],
        	[
        		'id_calon'	=> 3,
        		'id_status' => 2,
        		'id_staff'  => 1
        	],
        ]);
    }
}
