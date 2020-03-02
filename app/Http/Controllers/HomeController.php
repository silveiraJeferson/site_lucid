<?php

namespace jls\Http\Controllers;

use Illuminate\Http\Request;
use jls\Site;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::all();
        return view('sites.read', compact('sites'));
    }
}
