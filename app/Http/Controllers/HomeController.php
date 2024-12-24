<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'pos'
        ]);
    }

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
        return view('home');
    }
}
