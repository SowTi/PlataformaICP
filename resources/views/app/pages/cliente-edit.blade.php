@extends('layouts.app')


@section('head')

<div class="card-body">



<h6 class="m-0 font-weight-bold text-primary">
<div class="text-right">
</div>
<b>Editando:</b>
</h6>
<h1 class="m-0 font-weight-bold ">{{$cls->fantasia}} </h1>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="dados-tab" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" aria-selected="true">Dados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contatos-tab" data-toggle="tab" href="#contatos" role="tab" aria-controls="contatos" aria-selected="false">Contatos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bases-tab" data-toggle="tab" href="#bases" role="tab" aria-controls="bases" aria-selected="false">Bases</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="propostas-tab" data-toggle="tab" href="#propostas" role="tab" aria-controls="propostas" aria-selected="false">Propostas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="interacoes-tab" data-toggle="tab" href="#interacoes" role="tab" aria-controls="interacoes" aria-selected="false">Interacoes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="documentos-tab" data-toggle="tab" href="#documentos" role="tab" aria-controls="documentos" aria-selected="false">Documentos</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="dados" role="tabpanel" aria-labelledby="dados-tab">



    <div class="card shadow mb border-bottom-primary">
      <div >
        <div class="card-header">

        </div>

     <div class="card-body">


       <form method="POST" action="{{ route('cliente.update') }}">

    @csrf


    <!-- Formularios -->

           <div class="form-group row">
           <div class="col-sm-2 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">N° de Registro</h4>
           <input type="text" value="{{$cls->idclientes}}" class="form-control form-control-user" id="iidclientes" placeholder="code" name="idclientes" readonly>
           </div>
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">CNPJ</h4>
           <input type="text" value="{{$cls->cnpj}}" class="form-control form-control-user" id="icnpj" placeholder="..." name="cnpj" required>
           </div>
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Inscrição Estadual</h4>
           <input type="text" value="{{$cls->inscricaoestadual}}" class="form-control form-control-user" id="iinscricaoestadual" placeholder="..." name="inscricaoestadual">
           </div>
           </div>

           <div class="form-group row">
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Nome Fantasia</h4>
           <input type="text" value="{{$cls->fantasia}}" class="form-control form-control-user" id="ifantasia" placeholder="..." name="fantasia" required>
           </div>
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Razao Social</h4>
           <input type="text" value="{{$cls->razaosocial}}" class="form-control form-control-user" id="irazaosocial" placeholder="..." name="razaosocial" required>
           </div>
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Site</h4>
           <input type="text" value="{{$cls->website}}" class="form-control form-control-user" id="iwebsite" placeholder="..." name="website">
           </div>
           </div>

    <!--  Seletores -->
           <div class="form-group row">
           <div class="col-sm-3 mb-3 mb-sm-0" onload="load_fkresponsavel({{$cls->fkresponsavel}})">
           <h4 class="small font-weight-bold">Responsavel</h4>
           <div class="input-group mb-3">
             <select class="custom-select" id="ifkresponsavel" name="fkresponsavel" value="{{$cls->fkresponsavel}}" required>
               <option value="0">Escolha..</option>
               <option value="1">Fulano</option>
               <option value="2">Cicrano</option>
               <option value="3">Beltrano</option>
             </select>
           </div>
           </div>
           <div class="col-sm-3 mb-3 mb-sm-0" onload="load_fksegmento({{$cls->fksegmento}})">
           <h4 class="small font-weight-bold">Segmento</h4>
           <div class="input-group mb-3">
             <select class="custom-select" id="ifksegmento" name="fksegmento" value="{{$cls->fksegmento}}" required>
               <option value="0">Escolha..</option>
               <option value="1">Fulano</option>
               <option value="2">Cicrano</option>
               <option value="3">Beltrano</option>
             </select>
           </div>
           </div>
           <div class="col-sm-3 mb-3 mb-sm-0" onload="load_fkorigem({{$cls->fkorigem}})">
           <h4 class="small font-weight-bold">Origem</h4>
           <div class="input-group mb-3">
             <select class="custom-select" id="ifkorigem" name="fkorigem" value="{{$cls->fkorigem}}" required>
               <option value="0">Escolha..</option>
               <option value="1">Fulano</option>
               <option value="2">Cicrano</option>
               <option value="3">Beltrano</option>
             </select>
           </div>
           </div>
           </div>

           <div class="form-group row">
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Situação</h4>
           <input type="text" value="{{$cls->situacao}}" class="form-control form-control-user" id="isituacao" placeholder="..." name="situacao" required>
           </div>
           <div class="col-sm-8 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Observação</h4>
           <input type="text" value="{{$cls->observacao}}" class="form-control form-control-user" id="iobservacao" placeholder="..." name="observacao">
           </div>
           </div>

           <div class="form-group row">
           <div class="col-sm-5 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Endereço</h4>
           <input type="text" value="{{$cls->endereco}}" class="form-control form-control-user" id="iendereco" placeholder="..." name="endereco">
           </div>
           <div class="col-sm-5 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Complemento</h4>
           <input type="text" value="{{$cls->complemento}}" class="form-control form-control-user" id="icomplemento" placeholder="..." name="complemento">
           </div>
           </div>

           <div class="form-group row">
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Bairro</h4>
           <input type="text" value="{{$cls->bairro}}" class="form-control form-control-user" id="ibairro" placeholder="..." name="bairro">
           </div>
           <div class="col-sm-2 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">CEP</h4>
           <input type="text" value="{{$cls->cep}}" class="form-control form-control-user" id="icep" placeholder="..." name="cep">
           </div>
           <div class="col-sm-3 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Cidade</h4>
           <input type="text" value="{{$cls->cidade}}" class="form-control form-control-user" id="icidade" placeholder="..." name="cidade">
           </div>
           <div class="col-sm-3 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">Estado</h4>
           <input type="text" value="{{$cls->estado}}" class="form-control form-control-user" id="iestado" placeholder="..." name="estado">
           </div>
           </div>

           <div class="form-group row">
           <div class="col-sm-3 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">País</h4>
           <input type="text" value="{{$cls->pais}}" class="form-control form-control-user" id="ipais" placeholder="..." name="pais">
           </div>
           </div>

           <div class="form-group row">
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">ICMS</h4>
           <input type="text" value="{{$cls->icms}}" class="form-control form-control-user" id="iicms" placeholder="..." name="icms">
           </div>
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">COFINS</h4>
           <input type="text" value="{{$cls->cofins}}" class="form-control form-control-user" id="icofins" placeholder="..." name="cofins">
           </div>
           <div class="col-sm-4 mb-3 mb-sm-0">
           <h4 class="small font-weight-bold">ISS</h4>
           <input type="text" value="{{$cls->iss}}" class="form-control form-control-user" id="iiss" placeholder="..." name="iss">
           </div>
           </div>
           <div class="text-right">
           <button class="btn btn-secondary" type="button" onclick="cancel()">Cancelar</button>
           <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
            </div>
            </div>

          </div>




    </form>


  </div>
  <div class="tab-pane fade" id="contatos" role="tabpanel" aria-labelledby="contatos-tab">...</div>
  <div class="tab-pane fade" id="bases" role="tabpanel" aria-labelledby="bases-tab">...</div>
  <div class="tab-pane fade" id="propostas" role="tabpanel" aria-labelledby="propostas-tab">...</div>
  <div class="tab-pane fade" id="interacoes" role="tabpanel" aria-labelledby="interacoes-tab">...</div>
  <div class="tab-pane fade" id="documentos" role="tabpanel" aria-labelledby="documentos-tab">...</div>

</div>

</div>




@endsection
@section('scripts')
<link href="/css/custom.css" rel="stylesheet">
<script src="js/app/cliente.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
