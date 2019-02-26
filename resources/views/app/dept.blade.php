<!-- Tabela de Usuários -->
@extends('layouts.app')

 @section('head')
<h1 class="h3 mb-2 text-gray-800">Departamentos
  <a class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#adddept">
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

          @foreach ($dept as $dept)



            <tr>

              <td>{{ $dept->iddepartamentos }}</td>
              <td>{{ $dept->descricaodepartamento }}</td>





              <td>
                <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#edtdept-{{$dept->iddepartamentos, $dept->descricaodepartamento}}">
                  <span class="icon text-gray-100">
                    <i class="fas fa-edit"></i>
                  </span>
                </a>


                <a class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#deletedept-{{$dept->iddepartamentos, $dept->descricaodepartamento}}">
                  <span class="icon text-gray-100">
                    <i class="fas fa-trash"></i>

                  </span>
                </a>
              </td>
            </tr>
             @include('app.popup.dept-edit')
             @include('app.popup.dept-delete')
             @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>




@include('app.popup.dept-add')


@endsection

<!-- Scripts -->
@section('scripts')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
