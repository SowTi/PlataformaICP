<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class NewTestUserController extends Controller
{




  public function __construct()
  {

    $this->middleware('guest');

  }

  public function index()
  {
   Users::create([
        'name' => 'Teste',
        'email' => 'teste@teste.com',
        'password' => Hash::make('999443701'),
        'token' => str_random(40) . time()
    ]);

      return Redirect::to('login');
    }

}
