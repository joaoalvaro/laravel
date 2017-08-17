<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  
     public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }


   /* public function temPermissao(Permission $permission){
        return $this->temAlgumaPermissao($permission->roles);
    }*/
    
     public function temFuncao($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
    
    public function temAlgumaFuncao($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->temFuncao($role)) {
                    return true;
                }
            }
        } else {
            if ($this->temFuncao($roles)) {
                return true;
            }
        }
        return false;
    }
    
    /*public function temAlgumaPermissao($roles){
        
        if(is_array($roles) || is_object($roles)) {
            return !! $roles->intersect($this->roles)->count();
        }
        return $this->roles->contains('name', $roles);
    }*/
}
