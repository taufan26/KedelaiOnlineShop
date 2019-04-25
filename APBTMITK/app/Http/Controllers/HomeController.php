<?php

namespace App\Http\Controllers;

use App\produtcs_model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=produtcs_model::all();
        return view('front.home', compact('products'));
    }

    public function shop()
    {
        $products=produtcs_model::all();
        return view('front.shop', compact('products'));
    }
}
