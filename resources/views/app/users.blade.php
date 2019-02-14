<!-- Tela de cadastro de usuários -->
@extends('layouts.app')

 @section('head')



<!-- Tabela de Usuários -->
<h1 class="h3 mb-2 text-gray-800">Usuários
  <a class="btn btn-primary btn-circle" data-toggle="modal" data-target="#adduser">
    <i class="fas fa-plus  text-white-50">
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
      @if ($errors->has('name'))
      <div class="col-lg-6 mb-4">
        <div class="card bg-danger text-white shadow">
          <div class="card-body">
            Erro
            <div class="text-white-50 small">{{ $errors->first('name') }}</div>
          </div>
        </div>
      </div>
      @endif
      @if ($errors->has('password'))
      <div class="col-lg-6 mb-4">
        <div class="card bg-danger text-white shadow">
          <div class="card-body">
            Erro
            <div class="text-white-50 small">{{ $errors->first('password') }}</div>
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
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Opções</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $users)
          <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->active }}</td>
            <td>
              <a class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#edtuser-{{$users->id, $users->name, $users->email}}">
                <span class="icon text-white-50">
                  <i class="fas fa-edit"></i>
                </span>
              </a>

              <a class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#cndelete-{{$users->id, $users->name}}">
                <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
                </span>
              </a>
            </td>
          </tr>
           @include('app.spanbox.usr-edit')
           @include('app.spanbox.usr-delete')
           @endforeach
        </tbody>

      </table>
    </div>
  </div>
</div>






@include('app.spanbox.usr-add')


@endsection

<!-- Scripts -->
@section('scripts')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
