<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    public function index()
    {
        return view('contact-usIndex');
    }
    public function create()
    {
        return view('contact-usCreate');
    }
}
