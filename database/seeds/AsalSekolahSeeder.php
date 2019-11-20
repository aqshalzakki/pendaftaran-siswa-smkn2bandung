<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsalSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asal_sekolah')->insert([
        	[
        		'id_calon'     => 1,
        		'asal_sekolah' => 'SMPN 40 Bandung'
        	],
        	[
        		'id_calon'     => 2,
        		'asal_sekolah' => 'SMPN 9 Bandung'
        	],
        	[
        		'id_calon'     => 3,
        		'asal_sekolah' => 'SMP Pasundan 4 Bandung'
        	]
        ]);
    }
}
