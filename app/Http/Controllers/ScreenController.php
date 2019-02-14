<?php


//Controlador destinado a autorização de rotas que não possuem controlador dedicado

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenController extends Controller
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
     *
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



     // Dashboard
    public function dashboard()
    {
        return view('dash');
    }
}
