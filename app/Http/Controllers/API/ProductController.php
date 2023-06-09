<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Produk',
            'data' => $produk
        ],200);
    }
    
    public function show($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return response()->json([
                'succes'=>true,
                'message'=> 'Detail data produk',
                'data'=> $produk
            ],200);

        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Produk Tidak Ditemukan',
                'data' => null
            ], 404);
        }
        
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required|string',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brands' => 'required|string',
            'rating' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Valid',
                'data' => null
            ], 422);
        }

        $produk = Produk::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brands,
            'rating' => $request->rating
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambah',
            'data' => $produk
        ], 201);
    }
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'category_id' => 'required',
            'name' => 'required|string',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brands' => 'required|string',
            'rating' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid',
                'data' =>  $validator->errors()
            ], 400);
        }
        if($produk){
            $produk = $produk->update([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'brands' => $request->brands,
                'rating' => $request->rating
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil diperbarui',
                'data' => $produk
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan'(),
                'data' => null
            ], 404);
        }
            
    }
    public function destroy($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json([
                'success' => false,
                'message' => 'Data Produk Tidak Ditemukan',
                'data' => null
            ], 404);
        }

        $produk->delete();

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil dihapus',
            'data' => null
        ], 200);
    }
}

