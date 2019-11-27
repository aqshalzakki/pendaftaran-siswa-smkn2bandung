<?php

namespace App\Http\Controllers;

use App\CalonSiswa;
use Illuminate\Http\Request;
use App\UserMenu as Menu;
use App\UserRole as Role;

class CalonSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role_id = session()->get('role_id');
        
        return view('user.utama', [
            'user'  => CalonSiswa::getCalonSiswaById(session()->get('id')),
            'menu'  => Menu::getMenuByRole(),
            'role'  => Role::getRoleById($role_id)
            ]);
        }
        
    public function biodata()
    {
        $role_id = session()->get('role_id');
        return view('user.biodata', [
            'user'  => CalonSiswa::getCalonSiswaById(session()->get('id')),
            'menu'  => Menu::getMenuByRole(),
            'role'  => Role::getRoleById($role_id)
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CalonSiswa  $calonSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(CalonSiswa $calonSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CalonSiswa  $calonSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(CalonSiswa $calonSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CalonSiswa  $calonSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalonSiswa $calonSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CalonSiswa  $calonSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalonSiswa $calonSiswa)
    {
        //
    }
}
