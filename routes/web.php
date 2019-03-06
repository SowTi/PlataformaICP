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

  //Cadastros de Atividades

  Route::resource('escp', 'App\EscpController');
  Route::post('escp.create', 'App\EscpController@create')->name('escp.create');
  Route::get('escp.add', 'App\EscpController@add')->name('escp.add');

  Route::resource('facul', 'App\FaculController');
  Route::get('facul.login', 'App\FaculController@login')->name('facul.login');
