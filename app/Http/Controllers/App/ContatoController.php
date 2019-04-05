<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Data\Contatos;

class ContatoController extends Controller
{
   public function __construct()
  {

    $this->middleware('auth');

  }



  public function index()
  {


    $cnt=DB::table('contatos')->where('idcontatos','<>','0');

    $cnt = $cnt->get();

   return view('App/Contato', ["cnt"=>$cnt]);



  }
  public function create(Request $request)

  {
    Contatos::create([
        'nome' => $request['nome'],
        'email' => $request['email'],
    ]);


    $id=Contatos::orderBy('idcontatos', 'desc')->first();
    $cnt=Contatos::findOrFail($id->idcontatos);



   return view('App/Pages/contato-edit', ["cnt"=>$cnt]);


  }

  public function edit (Request $request)
  {

 $cnt=Contatos::findOrFail($request->get('ide'));

 return view('App/Pages/contato-edit', ["cnt"=>$cnt]);

  }

  public function update(Request $request)

  {
    $cn=Contatos::find($request->get('idcontatos'));

    $cn->cpf = $request->get('cpf');
    $cn->nome = $request->get('nome');
    $cn->fkcargocliente = $request->get('fkcargocliente');
    $cn->fkdepartamento = $request->get('fkdepartamento');
    $cn->email = $request->get('email');
    $cn->fktratamento = $request->get('fktratamento');

    $cn->update();

      return Redirect::to('contato');

  }

  public function destroy(Request $request)
  {
     $id=$request->get('id');


     $cn=Contatos::where('idcontatos',$id)->delete();

     return Redirect::to('contato');
  }


}
