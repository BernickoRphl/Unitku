<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // public function listUsersWithRole()
    // {
    //     // Get users with the role 'Admin'
    //     $admin = User::with('roles')->whereHas('roles', function ($query) {
    //         $query->where('role_name', 'Admin');
    //     })->get();

    //     return view('list_admin', compact('admin'));
    // }

    public function listUsersWithRole()
    {
        // Get all users
        $users = User::all();
        $role = Role::all();
        return view('list_admin', compact('users','role'));
    }

    // public function show_all_user(User $user)
    // {
    //     $users = User::all();
    //     return view('list_admin', compact('user'));
    // }
}
