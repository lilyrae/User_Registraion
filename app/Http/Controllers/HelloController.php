<?php

namespace App\Http\Controllers;

use App\Hello;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{

    public function index()
    {
        return view("hello");
    }
}