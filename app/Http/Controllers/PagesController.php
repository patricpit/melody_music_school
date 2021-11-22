<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        return view('blog');
    }

    public function enroll()
    {
        return view('enroll');
    }

    /* public function about()
    {

    }
       You can add more pages*/
}
