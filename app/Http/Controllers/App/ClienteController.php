<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Data\Clientes;

class ClienteController extends Controller
{
   public function __construct()
  {

    $this->middleware('auth');

  }



  public function index()
  {


    $cls=DB::table('clientes')->where('idclientes','<>','0');

    $cls = $cls->get();

   return view('App/Cliente', ["cls"=>$cls]);



  }
  public function create(Request $request)

  {
    Clientes::create([
        'fantasia' => $request['fantasia'],
        'cnpj' => $request['cnpj'],
    ]);


    $id=Clientes::orderBy('idclientes', 'desc')->first();
    $cls=Clientes::findOrFail($id->idclientes);



   return view('App/Pages/cliente-edit', ["cls"=>$cls]);


  }

  public function edit (Request $request)
  {

 $cls=Clientes::findOrFail($request->get('ide'));

 return view('App/Pages/cliente-edit', ["cls"=>$cls]);

  }

  public function update(Request $request)

  {
    $cl=Clientes::find($request->get('idclientes'));

    $cl->fantasia = $request->get('fantasia');
    $cl->razaosocial = $request->get('razaosocial');
    $cl->cnpj = $request->get('cnpj');
    $cl->inscricaoestadual = $request->get('incricaoestadual');
    $cl->website = $request->get('website');
    $cl->fkresponsavel = $request->get('fkresponsavel');
    $cl->fksegmento = $request->get('fksegmento');
    $cl->fkorigem = $request->get('fkorigem');
    $cl->situacao = $request->get('situacao');
    $cl->observacao = $request->get('observacao');
    $cl->endereco = $request->get('endereco');
    $cl->complemento = $request->get('complemento');
    $cl->bairro = $request->get('bairro');
    $cl->cep = $request->get('cep');
    $cl->cidade = $request->get('cidade');
    $cl->estado = $request->get('estado');
    $cl->pais = $request->get('pais');
    $cl->icms = $request->get('icms');
    $cl->pis = $request->get('pis');
    $cl->cofins = $request->get('cofins');
    $cl->iss = $request->get('iss');

      $cl->update();

      return Redirect::to('cliente');

  }

  public function destroy(Request $request)
  {
     $id=$request->get('id');


     $cls=Clientes::where('idclientes',$id)->delete();

     return Redirect::to('cliente');
  }


}
