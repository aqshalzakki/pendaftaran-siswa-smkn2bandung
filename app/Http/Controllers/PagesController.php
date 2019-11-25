<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AlurPPDB;
use App\Jurusan;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.home', [
    		'alur_ppdb' => AlurPPDB::all(),
            'jurusan'   => Jurusan::all(),
    	]);
    }

    public function jurusan(Request $jurusan)
    {
    	$jurusan = Jurusan::whereJurusan($jurusan->keahlian)->get()[0];
    	return view('pages.jurusan', [
    		'jurusan' => $jurusan
    	]);
    }

    public function tentang()
    {
    	
    }
}
