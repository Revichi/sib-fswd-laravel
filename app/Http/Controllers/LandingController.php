<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class LandingController extends Controller
{
    public function index()
   {
       $produk = Produk::all();
       return view('landing', compact('produk'));
   }
}
