<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $store = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id'=> 3,
            'phone' => $request->phone
        ]);
        if($store){
            return redirect()->route('login')->with('succes','Register Berhasil');
        } else{
            return redirect()->route('register')->with('error','Register Gagal');
        }
    }
}
