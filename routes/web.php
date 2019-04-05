<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Usuário de testes
Route::resource('newtestusers', 'App\NewTestUserController');


//Tela inicial -- Sem auth
 Route::get('/', function () {return view('welcome');});

//Básico

// Rotas de Autenticação
 Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
 Route::post('login', 'Auth\LoginController@login');
 Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Rota de Registro.
 Route::post('register', 'Auth\RegisterController@register')->name('users.register');
 Route::get('activate/{token}', 'Auth\RegisterController@activate');



// Rotas de Recuperação de Senha.
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//Dashboard
 Route::get('/dashboard', 'ScreenController@dashboard')->name('dash');  //Dashb


//Controle de Usuários --Cadastrar/Excluir/Editar
 Route::resource('users', 'App\UsersController');
 Route::post('users.update', 'App\UsersController@update')->name('users.update');
 Route::post('users.destroy', 'App\UsersController@destroy')->name('users.destroy');

 //Cadastros de Seguimentos

 Route::resource('seg', 'App\SegController');
 Route::post('seg.update', 'App\SegController@update')->name('seg.update');
 Route::post('seg.destroy', 'App\SegController@destroy')->name('seg.destroy');
 Route::post('seg.create', 'App\SegController@create')->name('seg.create');

 //Cadastros de Departamentos

 Route::resource('dept', 'App\DeptController');
 Route::post('dept.update', 'App\DeptController@update')->name('dept.update');
 Route::post('dept.destroy', 'App\DeptController@destroy')->name('dept.destroy');
 Route::post('dept.create', 'App\DeptController@create')->name('dept.create');

 //Cadastros de Cargos

 Route::resource('cargo', 'App\CargoController');
 Route::post('cargo.update', 'App\CargoController@update')->name('cargo.update');
 Route::post('cargo.destroy', 'App\CargoController@destroy')->name('cargo.destroy');
 Route::post('cargo.create', 'App\CargoController@create')->name('cargo.create');

 //Cadastros de Tratamentos

 Route::resource('trat', 'App\TratController');
 Route::post('trat.update', 'App\TratController@update')->name('trat.update');
 Route::post('trat.destroy', 'App\TratController@destroy')->name('trat.destroy');
 Route::post('trat.create', 'App\TratController@create')->name('trat.create');

  //Cadastros de Atividades

  Route::resource('ativ', 'App\AtivController');
  Route::post('ativ.update', 'App\AtivController@update')->name('ativ.update');
  Route::post('ativ.destroy', 'App\AtivController@destroy')->name('ativ.destroy');
  Route::post('ativ.create', 'App\AtivController@create')->name('ativ.create');

  //Cadastros de Escopos

  Route::resource('escp', 'App\EscpController');
  Route::post('escp.create', 'App\EscpController@create')->name('escp.create');  // redireciona para página de criação
  Route::get('escp.add', 'App\EscpController@add')->name('escp.add');  //Escreve no banco atividades / dados do escopo
  Route::get('escp.destroy', 'App\EscpController@destroy')->name('escp.destroy'); // Apaga escopo + Atividades do banco
  Route::get('escp.edit', 'App\EscpController@edit')->name('escp.edit'); //Redireciona para a pagina de edição
  Route::get('escp.update', 'App\EscpController@update')->name('escp.update'); //Escreve no banco dados novos de uma proposta ja existente

  //Cadastros de Contatos

  Route::resource('contato', 'App\ContatoController');
  Route::post('contato.create', 'App\ContatoController@create')->name('contato.create');
  Route::get('contato.edit', 'App\ContatoController@edit')->name('contato.edit');
  Route::post('contato.update', 'App\ContatoController@update')->name('contato.update');
  Route::get('contato.destroy', 'App\ContatoController@destroy')->name('contato.destroy');


  //Cadastros de Clientes

  Route::resource('cliente', 'App\ClienteController');
  Route::post('cliente.create', 'App\ClienteController@create')->name('cliente.create');
  Route::get('cliente.edit', 'App\ClienteController@edit')->name('cliente.edit');
  Route::post('cliente.update', 'App\ClienteController@update')->name('cliente.update');
  Route::get('cliente.destroy', 'App\ClienteController@destroy')->name('cliente.destroy');

  //Cadastros de Base

  Route::resource('base', 'App\BaseController');

  //Cadastros de Produtos

  Route::resource('produto', 'App\ProdutoController');
