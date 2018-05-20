<?php

namespace acclinic\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        // Trabalhando com dados para mostrar nas views, usando ou um Array ou o metodo nativo do PHP o compact(name)

        // $title = " HomeController";
        // $this->loadTemplate(viewName:'home',viewName:'');
        return view('');
    }

    
}
