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
 Route::resource('/users', 'App\UsersController');
 Route::post('update', 'App\UsersController@update')->name('users.update');
 Route::post('destroy', 'App\UsersController@destroy')->name('users.destroy');
