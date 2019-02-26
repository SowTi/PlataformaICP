<!-- Adcionar Usuário-->
<div class="modal fade" id="edtdept-{{$dept->iddepartamentos, $dept->descricaodepartamento}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar {{$dept->descricaodepartamento}}</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="card-body">

     <form class="user" method="post" action="{{route('dept.update')}}">
       @csrf
                    <input hidden="true" name="id" type="text" value="{{$dept->iddepartamentos}}" id="id"></input>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input value="{{$dept->descricaodepartamento}}" type="text" class="form-control form-control-user" id="name" placeholder="Nome" name="name" required autofocus>

                      </div>

                    </div>


      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-info" type="submit" >Salvar</button>
    </form>

      </div>
     </div>
    </div>
  </div>
