<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_menu')->insert([
            // User menu
            [
                'menu'     => 'Halaman Utama',
                'icon'     => 'fa-tachometer-alt',
                'route_name' => 'calon-siswa.index',
                'role_id'  => 1,
            ],
        	[
        		'menu'	   => 'Biodata',
        		'icon'     => 'fa-address-card',
                'route_name' => 'calon-siswa.biodata',
                'role_id'  => 1,
        	],
            [
                'menu'     => 'Edit Biodata',
                'icon'     => 'fa-user-edit',
                'route_name' => 'calon-siswa.edit',
                'role_id'  => 1,
            ],
        	[
        		'menu'	=> 'Berkas Lampiran',
        		'icon'  => 'fa-file-archive',
                'route_name' => 'calon-siswa.berkas',
                'role_id'  => 1,
        	],
            // ---------
        ]);
    }
}
