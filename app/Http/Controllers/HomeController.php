<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Jajan;
use App\Models\Jenis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $snack = Jajan::all();
        $jenis = Jenis::all();
        $pageTitle = 'Home';
        return view('home', compact('pageTitle', 'snack','jenis'));

    }
    public function show(string $id)
    {
        $pageTitle = ' Detail Jajan';
        // ELOQUENT
        $jajan = Jajan::find($id);
        return view('jajan.show', compact('pageTitle', 'jajan', ));
    }
}