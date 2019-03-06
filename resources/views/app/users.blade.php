<!-- Tela de cadastro de usuários -->
@extends('layouts.app')

 @section('head')



<!-- Tabela de Usuários -->
<h1 class="h3 mb-2 text-gray-800">Usuários
  <a class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#adduser">
    <i class="fas fa-plus  text-gray-100">
    </i>
  </a>
</h1>



<!-- Cards de erro -->
      @if ($errors->has('email'))
      <div class="col-lg-6 mb-4">
        <div class="card bg-danger text-white shadow">
          <div class="card-body">
            Erro
            <div class="text-white-50 small">{{ $errors->first('email') }}</div>
          </div>
        </div>
      </div>
      @endif
      @if ($errors->has('nome'))
      <div class="col-lg-6 mb-4">
        <div class="card bg-danger text-white shadow">
          <div class="card-body">
            Erro
            <div class="text-white-50 small">{{ $errors->first('nome') }}</div>
          </div>
        </div>
      </div>
      @endif
      @if ($errors->has('senha'))
      <div class="col-lg-6 mb-4">
        <div class="card bg-danger text-white shadow">
          <div class="card-body">
            Erro
            <div class="text-white-50 small">{{ $errors->first('senha') }}</div>
          </div>
        </div>
      </div>
      @endif


<div class="card shadow mb">

<!--Tabela -->
  <div class="card-body">
    <div class="table-responsive noroll">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cargo</th>
            <th>Telefone</th>
            <th>Equipe</th>
            <th>Status</th>
            <th>Opções</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($users as $users)

          <?php
             if ($users->active == 1)
              $border="btn-success btn-circle btn-sm fas fa-check";
             else{
              $border="btn-danger btn-circle btn-sm fas fa-ban";
             }

             if($users->active == 1)
               $delhide='"';
              else {
               $delhide='hidden="true"';
              }
          ?>

          <tr>

            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>Cargo</td>
            <td>Telefone</td>
            <td>Equipe</td>



            <td><i class="{{$border}}"></i></td>


            <td>
              <a {{$delhide}} class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#edtuser-{{$users->id, $users->name, $users->email}}">
                <span class="icon text-gray-100">
                  <i class="fas fa-edit"></i>
                </span>
              </a>


              <a {{$delhide}} class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#cndelete-{{$users->id, $users->name}}">
                <span class="icon text-gray-100">
                  <i class="fas fa-minus-circle"></i>

                </span>
              </a>
            </td>
          </tr>
           @include('app.popup.usr-edit')
           @include('app.popup.usr-delete')
           @endforeach
        </tbody>

      </table>
    </div>
  </div>
</div>





@include('app.popup.usr-add')


@endsection

<!-- Scripts -->
@section('scripts')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
