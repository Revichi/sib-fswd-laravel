<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('role.index', compact('role'));
    }
    public function create()
    {
        return view('role.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
          ]);
        $role = Role::create($request->all());
        return redirect()->route('role.index');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.edit', compact('role'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
            ]);
            $role = Role::find($id);
            $role->name = $request->name;
            $role->save();
            return redirect()->route('role.index')->with('success', 'Role Updated Successfully');
    }
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('role.index');
    }

}
