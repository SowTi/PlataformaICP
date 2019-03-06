<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Seg;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class SegController extends Controller
{




  public function __construct()
  {

    $this->middleware('auth');

  }

  public function index(request $request)
  {

    if ($request){
      $query=trim($request->get);
      $seg=DB::table('segmentos')->where('idsegmentos','<>','0');

     $seg = $seg->get();

     return view('App/Seg', ["seg"=>$seg]);
    }
  }

 public function create(request $request)
 {
   Seg::create([
       'descricaosegmento' => $request['name'],
   ]);
  return Redirect::to('seg');
 }

 public function update(Request $request)
 {
   $id=$request->post('id');
   $seg=Seg::findOrFail($id);
   $seg->descricaosegmento=$request->post('name');
   $seg->update();
    return Redirect::to('seg');
 }

 public function destroy(Request $request)
 {
    $id=$request->post('id');

    $seg=Seg::findOrFail($id);

    $seg->delete();

    return Redirect::to('seg');
 }

}
