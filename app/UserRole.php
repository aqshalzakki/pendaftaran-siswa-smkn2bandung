<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_role';

    public function scopeGetRoleById($role, $id)
    {
    	return $role->find($id)->first();
    }
}
