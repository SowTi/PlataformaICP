<!-- Tabela de Usuários -->
@extends('layouts.app')

 @section('head')
<h1 class="h3 mb-2 text-gray-800">Cargos
  <a class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#addcargo">
    <i class="fas fa-plus  text-gray-100">
    </i>
  </a>
</h1>




<div class="card shadow mb">

  <!--Tabela -->
    <div class="card-body">
      <div class="table-responsive noroll">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>

          @foreach ($cargo as $cargo)



            <tr>

              <td>{{ $cargo->idcargos }}</td>
              <td>{{ $cargo->descricaocargo }}</td>





              <td>
                <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#edtcargo-{{$cargo->idcargos, $cargo->descricaocargo}}">
                  <span class="icon text-gray-100">
                    <i class="fas fa-edit"></i>
                  </span>
                </a>


                <a class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#deletecargo-{{$cargo->idcargos, $cargo->descricaocargo}}">
                  <span class="icon text-gray-100">
                    <i class="fas fa-trash"></i>

                  </span>
                </a>
              </td>
            </tr>
             @include('app.popup.cargo-edit')
             @include('app.popup.cargo-delete')
             @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>




@include('app.popup.cargo-add')


@endsection

<!-- Scripts -->
@section('scripts')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
