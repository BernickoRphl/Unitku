<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function listUsersWithRole()
{
    // Get users with role ID 2
    $admin = User::with('roles')->whereHas('roles', function ($query) {
        $query->where('roles.id', 2); // Specify the table name (roles) along with the column name (id)
    })->get();

    dd($admin->toArray()); // Check the retrieved users

    return view('list_admin', compact('admin'));
}

}
