<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $coolString = " Hello from controller its Laravel running";

        return view('about', compact('coolString'));
    }
}
