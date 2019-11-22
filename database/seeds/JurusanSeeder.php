<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
        	[
                'thumbnail' => 'tki.jpg',
                'kategori'  => 'Teknologi',
        		'jurusan'	=> 'Teknik Komputer dan Informatika'
        	],
            [
                'thumbnail' => 'tm.jpg',
                'kategori'  => 'Permesinan',
                'jurusan'   => 'Teknik Mesin'
            ],
        	[
                'thumbnail' => 'seni_rupa.jpg',
                'kategori'  => 'Kesenian',
        		'jurusan'	=> 'Seni Rupa'
        	]
        ]);
    }
}
