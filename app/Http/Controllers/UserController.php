<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }
    public function create()
    {
        $role=Role::all();
        return view('user.add',compact('role'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone'=> 'required'
          ]);
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'user Inserted Successfully');
    }
    public function edit($id)
    {
        $role=Role::all();
        $user = User::find($id);
        return view('user.edit', compact('user','role'));
        }
    public function update(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone'=> 'required'
            ]);
            $user = User::find($id);
            $user->role_id = $request->role_id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();
            return redirect()->route('user.index')->with('success', 'user Updated Successfully');
            }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'user Deleted Successfully');
        }


}