<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getCasas()
    {
        $viewName="Casas";
        $isUserRegistered = true;
        return view('sistema.casas')
            ->with("Page_title",$viewName)
            ->with("Registered",$isUserRegistered);
    }
}
