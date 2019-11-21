<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlurPPDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alur_ppdb')->insert([
        	[
        		// login
        		'icon_file'	=> 'enter2.png',
        		'judul'		=> 'Login',
        		'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, impedit iste dolor? Molestias cumque aperiam animi reprehenderit corrupti.'
        	],
        	[
        		// Lengkapi Data
        		'icon_file'	=> 'file.png',
        		'judul'		=> 'Lengkapi Data',
        		'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, impedit iste dolor? Molestias cumque aperiam animi reprehenderit corrupti.'
        	],
        	[
        		// Pendaftaran
        		'icon_file'	=> 'man.png',
        		'judul'		=> 'Pendaftaran',
        		'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, impedit iste dolor? Molestias cumque aperiam animi reprehenderit corrupti.'
        	],
        	[
        		// Seleksi
        		'icon_file'	=> 'select.png',
        		'judul'		=> 'Seleksi',
        		'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, impedit iste dolor? Molestias cumque aperiam animi reprehenderit corrupti.'
        	],
        	[
        		// Pengumuman
        		'icon_file'	=> 'promotion.png',
        		'judul'		=> 'Pengumuman',
        		'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, impedit iste dolor? Molestias cumque aperiam animi reprehenderit corrupti.'
        	],
        	[
        		// Daftar Ulang
        		'icon_file'	=> 'clipboard.png',
        		'judul'		=> 'Daftar Ulang',
        		'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, impedit iste dolor? Molestias cumque aperiam animi reprehenderit corrupti.'
        	]
        ]);
    }
}
