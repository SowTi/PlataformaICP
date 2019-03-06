<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Dept;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class DeptController extends Controller
{




  public function __construct()
  {

    $this->middleware('auth');

  }

  public function index(request $request)
  {

    if ($request){
      $query=trim($request->get);
      $dept=DB::table('departamentos')->where('iddepartamentos','<>','0');

     $dept = $dept->get();

     return view('App/Dept', ["dept"=>$dept]);
    }
  }
 public function create(request $request)
 {
   Dept::create([
       'descricaodepartamento' => $request['name'],
   ]);
  return Redirect::to('dept');
 }

 public function update(Request $request)
 {
   $id=$request->post('id');
   $dept=Dept::findOrFail($id);
   $dept->descricaosegmento=$request->post('name');
   $dept->update();
    return Redirect::to('dept');
 }

 public function destroy(Request $request)
 {
    $id=$request->post('id');

    $dept=Dept::findOrFail($id);

    $dept->delete();

    return Redirect::to('dept');
 }

}
