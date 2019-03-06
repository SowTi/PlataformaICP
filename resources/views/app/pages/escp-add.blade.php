@extends('layouts.app')


@section('head')

  <div class="card shadow mb">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="h3 mb-2 text-gray-800 modal-title">Novo Escopo</h1>




</div>
   <div class="card-body">
     <form method="POST" action="{{ route('escp.create') }}">


       @csrf
                    <div class="form-group row">

                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="code" placeholder="Código" name="code" required autofocus>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="name" placeholder="Descrição" name="name" required autofocus>
                      </div>

                      </div>

                      <div class="dropdown mb-4">
                                          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Adcionar Atividades
                                          </button>
                                          <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">

                                            <div class="card shadow mb">

                                              <!--Tabela -->
                                                <div class="card-body">
                                                  <div class="table-responsive noroll">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                      <thead>
                                                        <tr>
                                                          <th>Id</th>
                                                          <th>Código</th>
                                                          <th>Nome</th>
                                                          <th>Opções</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>

                                                      @foreach ($ativ as $ativ)



                                                        <tr>

                                                          <td>{{ $ativ->idatividades }}</td>
                                                          <td>{{ $ativ->codigoatividade }}</td>
                                                          <td>{{ $ativ->descricaoatividade }}</td>





                                                          <td>
                                                            <a class="btn btn-info btn-icon-split" onclick="addItem({{$ativ->idatividades}})">
                                                              <input type="text" hidden="true" value="{{$ativ->idatividades}}"  id="{{$ativ->idatividades}}"></input>


                                                              <span class="icon text-gray-100">
                                                                <i class="fas fa-plus"></i>
                                                              </span>
                                                            </a>




                                                              </span>
                                                            </a>
                                                          </td>
                                                        </tr>
                                                         @endforeach
                                                      </tbody>

                                                    </table>
                                                  </div>
                                                </div>
                                              </div>


                                          </div>
                                        </div>

                 <ul id="dynamic-list" class="h6 mb-1 text-gray-800"></ul>

                 <div class="card shadow mb-4">
                   <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Atividades</h6>
                   </div>
                   <div class="card-body">
                     <div class="table-responsive noroll">
                       <table class="table table-bordered" id="datasTable" width="100%" cellspacing="0">
                         <thead>
                           <tr>
                             <th>ID</th>
                             <th>Código</th>
                             <th>Descrição</th>
                             <th>Opções</th>
                           </tr>
                         </thead>
                         <tbody>

                         </tbody>
                       </table>
                     </div>
                   </div>
                 </div>


            </div>
          </div>
        </div>


      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" onclick="">Cancelar</button>
        <button class="btn btn-success" type="submit" >Adcionar</button>
    </form>

    </div>





@endsection
@section('scripts')
<script src="js/app/escp.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
@endsection
