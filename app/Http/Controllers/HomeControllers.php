<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    /**
     * Create a new controller instance.
     * 
     *  @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Index()
    {
        return view('home');
    }
}
