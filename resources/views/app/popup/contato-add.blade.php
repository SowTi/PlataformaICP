<!-- Adcionar Usuário-->
<div class="modal fade" id="addcontato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adcionar Cliente </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="card-body">

     <form method="POST" action="{{ route('contato.create') }}">






       @csrf
                    <div class="form-group">
                      <div class="form-group row">
                      <div class="col-sm-7 mb-3 mb-sm-0">
                      <h4 class="small font-weight-bold">Nome</h4>
                      <input type="text" value="" class="form-control form-control-user" id="noem" placeholder="..." name="nome" required>
                      </div>
                      <div class="col-sm-5 mb-3 mb-sm-0">
                      <h4 class="small font-weight-bold">Email</h4>
                      <input type="text" value="" class="form-control form-control-user" id="email" placeholder="..." name="email" required>
                      </div>
                      </div>
                    </div>
                      </div>








      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-success" type="submit" >Salvar</button>
    </form>
      </div>
     </div>
    </div>
  </div>
