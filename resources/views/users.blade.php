<!-- Tela de cadastro de usuários -->
@extends('layouts.app')

 @section('head')



<!-- Tabela de Usuários -->
<h1 class="h3 mb-2 text-gray-800">Usuários</h1>
<div class="card shadow mb">



<!--Botões-->
 <div class="card-header">

    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#adduser">
      <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
      </span>

      <span class="text">Adcionar</span>
    </a>

    <a href="#" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-edit"></i>
      </span>

      <span class="text">Editar</span>
    </a>

    <a href="#" class="btn btn-danger btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-trash"></i>
      </span>

      <span class="text">Remover</span>
    </a>

 </div>



  <div class="card-body">
    <div class="table-responsive noroll">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Criado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Alexandre</td>
            <td>ajunior@icp-la.com.br</td>
            <td>1</td>
            <td>2019-02-08 18:08:48</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>



<!-- Adcionar Usuário-->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Usuário</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="card-body">

                  <form class="user">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Confirmação de Email">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                      </div>
                      <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirmação de Senha">
                      </div>
                    </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="#"
       onclick="event.preventDefault();
       document.getElementById('uknown').submit();">Salvar</a>
      <!-- <form id="uknown" action="#" method="POST" style="display: none;"> {{ csrf_field() }} </form> -->
    </form>
  </div>
      </div>
    </div>
  </div>



@endsection

<!-- Scripts -->
@section('scripts')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
