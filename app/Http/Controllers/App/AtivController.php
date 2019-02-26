<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Ativ;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class AtivController extends Controller
{




  public function __construct()
  {

    $this->middleware('auth');

  }

  public function index(request $request)
  {

    if ($request){
      $query=trim($request->get);
      $ativ=DB::table('atividades')->where('idatividades','<>','0');

     $ativ = $ativ->get();

     return view('App/Ativ', ["ativ"=>$ativ]);
    }
  }
 public function create(request $request)
 {
   Ativ::create([
       'descricaoatividade' => $request['name'],
       'codigoatividade' => $request['code']
   ]);
  return Redirect::to('ativ');
 }

 public function update(Request $request)
 {
   $id=$request->post('id');
   $ativ=Ativ::findOrFail($id);
   $ativ->descricaoatividade=$request->post('name');
   $ativ->codigoatividade=$request->post('code');
   $ativ->update();
    return Redirect::to('ativ');
 }

 public function destroy(Request $request)
 {
    $id=$request->post('id');

    $ativ=Ativ::findOrFail($id);

    $ativ->delete();

    return Redirect::to('ativ');
 }

}
