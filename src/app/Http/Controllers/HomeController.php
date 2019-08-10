<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hello = 'hello world!!';
        $hello_array = ['Helllow!', 'こんにちは', 'ニーハオ'];

        return view('index', compact('hello', 'hello_array'));
    }
}
