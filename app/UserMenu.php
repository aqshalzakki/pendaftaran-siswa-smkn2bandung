<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    protected $table = 'user_menu';

    public function scopeGetMenuByRole($menu)
    {
    	$role_id = session()->get('role_id');
    	
    	return $menu->whereRole_id($role_id)
    				->get();
    } 
}
