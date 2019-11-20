<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendaftaran')->insert([
        	[
        		'id_calon'	=> 1
        	],
        	[
        		'id_calon'	=> 3
        	],
        ]);
    }
}
