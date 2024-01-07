<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    // public function listUsersWithRole()
    // {
    //     // Get all users
    //     $users = User::all();
    //     $role = Role::all();
    //     return view('list_admin', compact('users', 'role'));
    // }
    public function listAdmin()
    {
        $users = User::all();
        return view('list_admin', compact('users'));
    }

    public function createAdmin(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'is_active' => '1',
        ]);

        return redirect()->route('admin.list')->with('success', 'Admin created successfully!');
    }


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        if (empty($user)) {
            return redirect()->route('admin.create');
        }

        return redirect()->route('admin.list')->with('success', 'Registration successful!');
    }
}

