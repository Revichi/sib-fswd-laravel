<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brands::all();
        return view('brands.index', compact('brands'));
    }
    public function create()
    {
        return view('brands.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        Brands::create($request->all());
        return redirect()->route('brands.index')->with('success', 'brands Inserted Successfully');
    }
    public function edit($id)
    {
        $brands = Brands::find($id);
        return view('brands.edit', compact('brands'));
        }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
            ]);
            $brands = Brands::find($id);
            $brands->name = $request->name;
            $brands->save();
            return redirect()->route('brands.index')->with('success', 'brands Updated Successfully');
            }
    public function destroy($id)
    {
        $brands = Brands::find($id);
        $brands->delete();
        return redirect()->route('brands.index')->with('success', 'brands Deleted Successfully');
        }


}
