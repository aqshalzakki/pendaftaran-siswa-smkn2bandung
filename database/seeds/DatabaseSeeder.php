<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	AkunCalonSiswaSeeder::class,
            OrangtuaCalonSeeder::class,
        	AlamatSeeder::class,
        	AsalSekolahSeeder::class,
        	CalonSiswaSeeder::class,
        	StaffSeeder::class,
        	TempatTanggalLahirSeeder::class,
            StatusSeeder::class,
            PendaftaranSeeder::class,
            DetailPendaftaranSeeder::class
        ]);
    }
}
