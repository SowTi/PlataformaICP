<!--Confirmação Deletar-usuário-->


<div class="modal fade" id="deleteativ-{{$ativ->idatividades, $ativ->codigoatividade, $ativ->descricaoatividade}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">


        Deseja apagar a atividade: "{{$ativ->descricaoatividade}}"?. Esta ação não pode ser desfeita

      </div>


      <div class="modal-footer">
        <form method="post" action="{{route('ativ.destroy')}}">

          @csrf
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
       <input hidden="true" name="id" type="text" value="{{$ativ->idatividades}}" id="id"></input>

        <button class="btn btn-danger" type="submit">Excluir</button>
        </form>
      </div>

    </div>
  </div>

</div>
