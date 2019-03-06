<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Ativ;
use App\Data\Escp;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class EscpController extends Controller
{




  public function __construct()
  {

    $this->middleware('auth');

  }



  public function index()
  {

    $escp=DB::table('escopos')->where('idescopos','<>','0');

   $escp = $escp->get();

   return view('App/Escp', ["escp"=>$escp]);


  }

  public function add()
  {
    $ativ=DB::table('atividades')->where('idatividades','<>','0');

   $ativ = $ativ->get();

   return view('App/Pages/escp-add', ["ativ"=>$ativ]);
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
