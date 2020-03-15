<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $biaya = DB::table('pasien')->pluck('biaya');
        return view('admin.index',['biaya'=>$biaya]);
    }
    public function welcome()
    {
        return view('index');
    }
}
