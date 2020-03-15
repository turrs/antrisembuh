<?php

namespace App\Http\Controllers;
use App\Dokter;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request){
        return view('admin.index');
    }
    public function profile(Request $request){
        return view('profile');
    }
    public function dokter(Request $request){
        $dokter = Dokter::all();
        return view('doctors',['dokter'=>$dokter]);
    }
}
