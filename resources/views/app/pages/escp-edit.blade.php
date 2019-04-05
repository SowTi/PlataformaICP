@extends('layouts.app')


@section('head')

  <div class="card shadow mb">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="h3 mb-2 text-gray-800 modal-title">Editar: <b>{{$escp1->nomeescopo}}</b></h1>




</div>
   <div class="card-body">


     <form method="POST" action="{{ route('escp.update') }}">


       @csrf
                    <div class="form-group row">

                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" value="{{$escp1->idescopos}}" class="form-control form-control-user" id="code" placeholder="ID" name="code" readonly>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" value="{{$escp1->nomeescopo}}" class="form-control form-control-user" id="name" placeholder="Nome" name="name" required autofocus>
                      </div>

                      </div>




                 <ul id="dynamic-list" class="h6 mb-1 text-gray-800"></ul>

                 <div class="card shadow mb-4">
                   <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Atividades</h6>
                   </div>
                   <div class="card-body">
                     <div class="table-responsive noroll">
                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                           <tr>
                             <th>ID</th>
                             <th>Código</th>
                             <th>Descrição</th>
                             <th>Opções</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach ($ativ as $ativ)


                             <tr>

                               <td data-name="name_{{$ativ->idatividades}}">{{ $ativ->idatividades }}</td>
                               <td>{{ $ativ->codigoatividade }}</td>
                               <td>{{ $ativ->descricaoatividade }}</td>
                               <td>


                                 <div class="pretty p-default p-round p-smooth p-plain p-toggle">
                                  <input type="checkbox" id="check-{{$ativ->idatividades}}" name="check">

                                  <div class="state p-success-o p-on">
                                      <label> Remover</label>
                                  </div>
                                  <div class="state p-danger p-off">
                                      <label> Adcionar</label>
                                  </div>
                                  </div>

                               </td>
                            </tr>

                            <!-- Checa os itens ja existentes para o escopo -->
                            <script type="text/javascript">
                            function ckbox(idd){
                               document.getElementById('check-'+idd).checked = true;
                            }
                            </script>

                            <?php
                           $ative = array();

                            foreach ($ativ1 as $ativs){



                          $ative[$ativs->atividades_idatividades]= $ativs->atividades_idatividades;


                     }

                            $ativv = $ativ->idatividades;

                              $key = array_search($ativv, $ative);

                               if($key <> ''){
                                 echo '<script type="text/javascript">',
                                  'ckbox('.$key.');',
                                  '</script>' ;
                               }


                          unset($key);
                          unset($ative);
                              ?>

                          @endforeach
                         </tbody>
                       </table>
                     </div>
                   </div>
                 </div>


            </div>
          </div>
        </div>


      <div class="modal-footer">

        <button class="btn btn-secondary" type="button" onclick="cancel()">Cancelar</button>
        <button class="btn btn-primary" type="button" onclick="update()">Aplicar</button>
    </form>

    </div>





@endsection
@section('scripts')
<link href="/css/custom.css" rel="stylesheet">
<script src="js/app/escp.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/app/users.js"></script>
<script src="js/app/escp.js"></script>
@endsection
