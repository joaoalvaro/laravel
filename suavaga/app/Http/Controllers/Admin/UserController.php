<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

class UserController extends Controller
{
     private $user;
    
    public function __construct(User $user, Role $role) {
        
        $this->user = $user;
        $this->role = $role;
    }
    public function index(User $user)
    {
        $users = $this->user->all();
        
        return view('admin.user', compact('users'));
    }

    
    public function atribuirFuncoes(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'Usuario')->first());
        }
        if ($request['role_recrutador']) {
            $user->roles()->attach(Role::where('name', 'Recrutador')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}
