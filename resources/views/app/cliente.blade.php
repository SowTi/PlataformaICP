@extends('layouts.app')


@section('head')

<h1 class="h3 mb-2 text-gray-800">Clientes
  <a class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#addcliente">
    <i class="fas fa-plus  text-gray-100">
    </i>
  </a>
</h1>


<div class="card shadow mb">

  <div class="card-body">
   <form class="user">

     <!--Tabela -->
       <div class="card-body">
         <div class="table-responsive noroll">
           <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
             <thead>
               <tr>

                 <th>ID</th>
                 <th>Fantasia</th>
                 <th>CNPJ</th>
                 <th>Site</th>
                 <th>Opções</th>
               </tr>
             </thead>
             <tbody>

           @foreach ($cls as $cls)

               <tr>

                 <td>{{$cls->idclientes}}</td>
                 <td>{{$cls->fantasia}}</td>
                 <td>{{$cls->cnpj}}</td>
                 <td>{{$cls->website}}</td>

                 <td>

                   <button class="btn btn-info btn-icon-split" type="button" onclick="edit({{$cls->idclientes}})">

                     <span class="icon text-gray-100">
                       <i class="fas fa-edit"></i>
                     </span>
                   </button>

                   <a class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#deletecliente-{{$cls->idclientes, $cls->fantasia}}">
                     <span class="icon text-gray-100">
                       <i class="fas fa-minus-circle"></i>

                     </span>
                   </a>
                 </td>



               </tr>
              @include('app.popup.cliente-delete')
              @endforeach

             </tbody>

           </table>
         </div>
       </div>

   </form>
 </div>

</div>

@include('app.popup.cliente-add')

@endsection

<!-- Scripts -->
@section('scripts')
<script src="js/app/cliente.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/app/users.js"></script>
@endsection
