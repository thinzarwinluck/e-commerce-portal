<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $beverages = Product::where('category', 'beverages')->take(5)->get();

        $alcoholic = Product::where('category', 'alcohol')->take(5)->get();

        $snacks = Product::where('category', 'snacks')->take(5)->get();

        $chocolate = Product::where('category', 'chocolate')->take(5)->get();

        $health = Product::where('category', 'health')->take(5)->get();

        $cooking = Product::where('category', 'cooking')->take(5)->get();

        return view('home', compact('beverages', 'alcoholic', 'snacks', 'chocolate', 'health', 'cooking'));
    }
}
