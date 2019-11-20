<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TempatTanggalLahirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempat_tanggal_lahir')->insert([
        	[
        		'id_calon'      => 1,
        		'tempat_lahir'  => 'Bandung',
        		'tanggal_lahir' => '2002-10-01'
        	],
        	[
        		'id_calon'      => 2,
        		'tempat_lahir'  => 'Bandung',
        		'tanggal_lahir' => '2002-11-12'
        	],
        	[
        		'id_calon'      => 3,
        		'tempat_lahir'  => 'Jakarta',
        		'tanggal_lahir' => '2002-04-15'
        	]
        ]);
    }
}
