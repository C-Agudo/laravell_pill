<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        $items = Articles::paginate();
        return view('home', compact('items'));
    }
}
