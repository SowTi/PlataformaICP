<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Cargo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class CargoController extends Controller
{




  public function __construct()
  {

    $this->middleware('auth');

  }

  public function index(request $request)
  {

    if ($request){
      $query=trim($request->get);
      $cargo=DB::table('cargos')->where('idcargos','<>','0');

     $cargo = $cargo->get();

     return view('App/Cargo', ["cargo"=>$cargo]);
    }
  }
 public function create(request $request)
 {
   Cargo::create([
       'descricaocargo' => $request['name'],
   ]);
  return Redirect::to('cargo');
 }

 public function update(Request $request)
 {
   $id=$request->post('id');
   $cargo=Cargo::findOrFail($id);
   $cargo->descricaocargo=$request->post('name');
   $cargo->update();
    return Redirect::to('cargo');
 }

 public function destroy(Request $request)
 {
    $id=$request->post('id');

    $cargo=Cargo::findOrFail($id);

    $cargo->delete();

    return Redirect::to('cargo');
 }

}
