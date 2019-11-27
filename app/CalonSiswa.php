<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model 
{
    protected $table = 'calon_siswa';

    public function scopeGetCalonSiswaById($calonSiswa, $id)
    {
       return $calonSiswa->find($id);
    }
}
