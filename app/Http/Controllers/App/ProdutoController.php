<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class ProdutoController extends Controller
{
   public function __construct()
  {

    $this->middleware('auth');

  }



  public function index()
  {


   return view('App/Produto');



  }
}
