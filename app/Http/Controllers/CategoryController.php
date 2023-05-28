<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagories;
use App\Models\Produk;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Catagories::all();
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        Catagories::create($request->all());
        return redirect()->route('category.index')->with('success', 'Category Inserted Successfully');
    }
    public function edit($id)
    {
        $category = Catagories::find($id);
        return view('category.edit', compact('category'));
        }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
            ]);
            $category = Catagories::find($id);
            $category->name = $request->name;
            $category->save();
            return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
            }
    public function destroy($id)
    {
        $category = Catagories::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category Deleted Successfully');
        }


}
