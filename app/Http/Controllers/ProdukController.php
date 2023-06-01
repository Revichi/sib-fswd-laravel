<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Catagories;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
          'category_id'=> 'required',
         'name' => 'required|string',
         'price' => 'required|integer',
         'sale_price' => 'required|integer',
         'brands' => 'required|string',
         'rating' => 'required|integer'
       ]);
       if($validator->fails()){
        return redirect()->back()->withErrors($validator->errors());
       }
       
      $produk= Produk::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'price' => $request->price,
        'sale_price' => $request->sale_price,
        'brands' => $request->brands,
        'rating' => $request->rating
      ]);
       
       return redirect()->route('produk.index');
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
        'name' => 'required|string',
        'price' => 'required|integer',
        'sale_price' => 'required|integer',
        'brands' => 'required|string',
        'rating' => 'required|integer'

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
