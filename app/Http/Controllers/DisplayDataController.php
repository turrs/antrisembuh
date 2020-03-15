<?php

namespace App\Http\Controllers;
use Datatables;
use App\User;
use Illuminate\Http\Request;

class DisplayDataController extends Controller
{
    public function index()
    {
        return Datatables::of(User::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('displaydata');
    }
}
