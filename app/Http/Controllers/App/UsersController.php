<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\UsersFormRequest;
use App\Data\Users;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;

 class UsersController extends Controller
 {

 //Controlador de Cadastrar/Excluir/Editar usuário.



   public function __construct()
   {

     $this->middleware('auth');

   }






   public function index(request $request)
   {

     if ($request){
       $query=trim($request->get);
       $users=DB::table('users')->where('email','<>',Auth::user('email'));

      $users = $users->get();

      return view('App/Users',["users"=>$users]);
     }

   }


   public function update(UsersFormRequest $request)
   {
     $id=$request->post('id');
     $users=Users::findOrFail($id);
     $users->name=$request->post('name');
     $users->email=$request->post('email');
     $users->update();
      return Redirect::to('users');
   }


   public function destroy(Request $request)
   {
      $id=$request->post('id');

      $users=Users::findOrFail($id);

      $users->delete();

      return Redirect::to('users');
   }

}
