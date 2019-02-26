<!-- Adcionar Usuário-->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Usuário</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="card-body">

     <form class="user" method="POST" action="{{ route('users.register') }}">


       @csrf
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} form-control-user" id="name" placeholder="Nome" name="name" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                      </div>


                      <div class="col-sm-6">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" id="email" placeholder="Email" name="email" required>

                        @if ($errors->has('email'))

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                      </div>
                    </div>


                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control{{ $errors->has('senha') ? ' is-invalid' : '' }} form-control-user" id="password" placeholder="Senha" name="password" required>

                        @if ($errors->has('password'))

                            <span class="invalid-feedback" role="alert" >
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                      </div>


                      <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="password-confirm" placeholder="Confirmação de Senha" name="password_confirmation" required>
                      </div>



                    </div>


      </div>


      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-success" type="submit" >Adcionar</button>
    </form>
      </div>
     </div>
    </div>
  </div>
