<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Trat;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class TratController extends Controller
{




  public function __construct()
  {

    $this->middleware('auth');

  }

  public function index(request $request)
  {

    if ($request){
      $query=trim($request->get);
      $trat=DB::table('tratamentos')->where('idtratamentos','<>','0');

     $trat = $trat->get();

     return view('App/Trat', ["trat"=>$trat]);
    }
  }
 public function create(request $request)
 {
   Trat::create([
       'descricaotratamento' => $request['name'],
   ]);
  return Redirect::to('trat');
 }

 public function update(Request $request)
 {
   $id=$request->post('id');
   $trat=Trat::findOrFail($id);
   $trat->descricaotratamento=$request->post('name');
   $trat->update();
    return Redirect::to('trat');
 }

 public function destroy(Request $request)
 {
    $id=$request->post('id');

    $trat=Trat::findOrFail($id);

    $trat->delete();

    return Redirect::to('trat');
 }

}
