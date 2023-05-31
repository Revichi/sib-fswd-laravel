<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Catagories;

class ProdukController extends Controller
{
   public function index()
   {
       $produk = Produk::all();
       return view('produk.index', compact('produk'));
   }
   public function create()
   {
      $categories=Catagories::all();
      return view('produk.add', compact('categories'));
   }
   public function store(Request $request)
   {
       $request->validate([
         'category_id'=> 'required',
         'name' => 'required',
         'price' => 'required',
         'sale_price' => 'required',
         'brands' => 'required',
         'rating' => 'required'
       ]);
       
       Produk::create($request->all());
       
       return redirect()->route('produk.index')->with('success', 'produk Inserted Successfully');
   }
   public function edit($id)
   {
      
       $categories=Catagories::all();
       $produk = Produk::find($id);
       return view('produk.edit', compact('produk','categories'));
       }
   public function update(Request $request, $id)
   {
       $request->validate([
         'category_id'=> 'required',
         'name' => 'required',
         'price' => 'required',
         'sale_price' => 'required',
         'brands' => 'required',
         'rating' => 'required'

           ]);
           $produk = Produk::find($id);
           $produk->name = $request->name;
           $produk->category_id = $request->category_id;
           $produk->price = $request->price;
           $produk->sale_price = $request->sale_price;
           $produk->brands = $request->brands;
           $produk->rating = $request->rating;
           $produk->save();
           return redirect()->route('produk.index')->with('success', 'produk Updated Successfully');
           }
   public function destroy($id)
   {
       $produk = Produk::find($id);
       $produk->delete();
       return redirect()->route('produk.index')->with('success', 'produk Deleted Successfully');
       }


}
