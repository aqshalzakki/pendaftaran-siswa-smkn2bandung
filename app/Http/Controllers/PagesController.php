<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlurPPDB;

class PagesController extends Controller
{
    public function home()
    {
    	$alur_ppdb = AlurPPDB::all();
    	
    	return view('pages.home', [
    		'alur_ppdb' => $alur_ppdb
    	]);
    }
    public function tentang()
    {
    	
    }
}
