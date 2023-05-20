<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexs()
    {
        return view('index');
    }
    public function edit()
    {
        return view('edit');
    }
    public function tambah()
    {
        return view('tambah');
    }
}