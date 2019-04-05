@extends('layouts.app')


@section('head')

<h1 class="h3 mb-2 text-gray-800">Contatos
  <a class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#addcontato">
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
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <thead>
               <tr>

                 <th>ID</th>
                 <th>Nome</th>
                 <th>Email</th>
                 <th>Opções</th>
               </tr>
             </thead>
             <tbody>

           @foreach ($cnt as $cnt)

               <tr>

                 <td>{{$cnt->idcontatos}}</td>
                 <td>{{$cnt->nome}}</td>
                 <td>{{$cnt->email}}</td>

                 <td>

                   <button class="btn btn-info btn-icon-split" type="button" onclick="edit({{$cnt->idcontatos}})">

                     <span class="icon text-gray-100">
                       <i class="fas fa-edit"></i>
                     </span>
                   </button>

                   <a class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#deletecontato-{{$cnt->idcontatos, $cnt->nome}}">
                     <span class="icon text-gray-100">
                       <i class="fas fa-minus-circle"></i>

                     </span>
                   </a>
                 </td>



               </tr>
              @include('app.popup.contato-delete')
              @endforeach

             </tbody>

           </table>
         </div>
       </div>

   </form>
 </div>

</div>

@include('app.popup.contato-add')

@endsection

<!-- Scripts -->
@section('scripts')
<script src="js/app/contato.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
