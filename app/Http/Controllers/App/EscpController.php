<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Ativ;
use App\Data\Escp;
use App\Data\Escp_has_ativ;
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


 public function create(Request $request)
 {

   Escp::create([
       'nomeescopo' => $request['name'],
   ]);



   $id=Escp::orderBy('idescopos', 'desc')->first();
   $escp=Escp::findOrFail($id->idescopos);
   $ativ=DB::table('atividades')
   ->where('idatividades','<>','0');



  $ativ = $ativ->get();

  return view('App/Pages/escp-add', ["ativ"=>$ativ, "escp"=>$escp]);

 }


 public function destroy(Request $request)
 {
    $id=$request->get('id');


    $escp=Escp::where('idescopos',$id)->delete();
    $ativs=Escp_has_ativ::where('escopos_idescopos',$id)->delete();

    return Redirect::to('escp');
 }






 public function add(Request $request)
 {

  $items = isset($_REQUEST['items']) ? json_decode($_REQUEST['items']) : array();

  $id = isset($_REQUEST['id']) ? json_decode($_REQUEST['id']) : array();

  $name = isset($_REQUEST['name']) ? json_decode($_REQUEST['name']) : array();

foreach ($items as $item){

 Escp_has_ativ::create([
   'atividades_idatividades' => $item,
   'escopos_idescopos' => $id,
]);

   $escp=Escp::findOrFail($id);
   $escp->nomeescopo=$name;
   $escp->update();
}

  return Redirect::to('escp');
}




 public function update(Request $request)
 {

   $items = isset($_REQUEST['items']) ? json_decode($_REQUEST['items']) : array();

   $id = isset($_REQUEST['id']) ? json_decode($_REQUEST['id']) : array();

   $name = isset($_REQUEST['name']) ? json_decode($_REQUEST['name']) : array();

 $ativs_del=Escp_has_ativ::where('escopos_idescopos', '=',$id)->delete();

 foreach ($items as $item){

  Escp_has_ativ::create([
    'atividades_idatividades' => $item,
    'escopos_idescopos' => $id,
 ]);

    $escp=Escp::findOrFail($id);
    $escp->nomeescopo=$name;
    $escp->update();
 }

   return Redirect::to('escp');

}



public function edit(Request $request)
{
$id= isset($_REQUEST['id']) ? json_decode($_REQUEST['id']) : array();

$escp1=Escp::where('idescopos', '=', $id)->orderBy('idescopos', 'desc')->first();
$ativ1=DB::table('escopos_has_atividades')->where('escopos_idescopos','=',$id);
$ativ=DB::table('atividades')->where('idatividades','<>','0');

$ativ=$ativ->get();
$ativ1=$ativ1->get();
$escp1;

 return view('App/Pages/escp-edit', ["ativ1"=>$ativ1, "escp1"=>$escp1, "ativ"=>$ativ]);

}

}
