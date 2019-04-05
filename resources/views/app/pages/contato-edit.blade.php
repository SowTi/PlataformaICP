@extends('layouts.app')


@section('head')



  <div class="card shadow mb">
    <div class="modal-content">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><b>Editando</b> {{$cnt->nome}}</h6>
      </div>

   <div class="card-body">


     <form method="POST" action="{{ route('contato.update') }}">

@csrf


<!-- Formularios -->

         <div class="form-group row">
         <div class="col-sm-2 mb-3 mb-sm-0">
         <h4 class="small font-weight-bold">N° de Registro</h4>
         <input type="text" value="{{$cnt->idcontatos}}" class="form-control form-control-user" id="iidcontatos" placeholder="..." name="idcontatos" readonly>
         </div>
         <div class="col-sm-4 mb-3 mb-sm-0">
         <h4 class="small font-weight-bold">Nome</h4>
         <input type="text" value="{{$cnt->nome}}" class="form-control form-control-user" id="inome" placeholder="..." name="nome" required>
         </div>
         <div class="col-sm-3 mb-3 mb-sm-0">
         <h4 class="small font-weight-bold">Email</h4>
         <input type="text" value="{{$cnt->email}}" class="form-control form-control-user" id="iemail" placeholder="..." name="email">
         </div>
         <div class="col-sm-3 mb-3 mb-sm-0">
         <h4 class="small font-weight-bold">CPF</h4>
         <input type="text" value="{{$cnt->cpf}}" class="form-control form-control-user" id="icpf" placeholder="..." name="cpf">
         </div>
         </div>

 <!--  Seletores -->
         <div class="form-group row">
         <div class="col-sm-3 mb-3 mb-sm-0">
         <h4 class="small font-weight-bold">Cargo Cliente</h4>
         <div class="input-group mb-3">
           <select class="custom-select" id="ifkcargocliente" name="fkcargocliente" value="" required>
             <option value="0">Escolha..</option>
             <option value="1">Fulano</option>
             <option value="2">Cicrano</option>
             <option value="3">Beltrano</option>
           </select>
         </div>
         </div>
         <div class="col-sm-3 mb-3 mb-sm-0">
         <h4 class="small font-weight-bold">Departamento</h4>
         <div class="input-group mb-3">
           <select class="custom-select" id="ifkdepartamento" name="fkdepartamento" value="" required>
             <option value="0">Escolha..</option>
             <option value="1">Fulano</option>
             <option value="2">Cicrano</option>
             <option value="3">Beltrano</option>
           </select>
         </div>
         </div>
         <div class="col-sm-3 mb-3 mb-sm-0">
         <h4 class="small font-weight-bold">Tratamento</h4>
         <div class="input-group mb-3">
           <select class="custom-select" id="ifktratamento" name="fktratamento" value="" required>
             <option value="0">Escolha..</option>
             <option value="1">Fulano</option>
             <option value="2">Cicrano</option>
             <option value="3">Beltrano</option>
           </select>
         </div>
         </div>
         </div>


            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" onclick="cancel()">Cancelar</button>
              <button class="btn btn-success" type="submit">Salvar</button>
          </div>
          </div>

        </div>




</form>




@endsection
@section('scripts')
<link href="/css/custom.css" rel="stylesheet">
<script src="js/app/contato.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
