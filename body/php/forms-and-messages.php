<!-- form-powerpush-access-key -->
<div class="modal fade" id="form-powerpush-access-key" tabindex="-1" role="dialog" aria-labelledby="form-powerpush-access-key-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  btn btn-warning">
        <h5 class="modal-title" id="form-powerpush-access-key-title"><b>Insira sua chave de Acesso: <a onclick="ShowAccessKeyInfo()"><i class="fas fa-question-circle"></i></a></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <form id="form-access">
          <br>
          <input type="text" name="powerpush-access-key" class="form-control" placeholder="Chave de Acesso Power Push">
          <br>
          </form>
          <div align="right">
            <button id="btn-submit-access-key" class="btn btn-warning" data-toggle="modal" data-target="#form-cadastro" data-dismiss="modal" onclick="AccessKeyValidate($());">
              Validar Chave
            </button> 
          </div>
        </div>
      </div>
      <!-- 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      -->
    </div>
  </div>
</div>


<!-- form-cadastro -->
<div class="modal fade" id="form-cadastro" tabindex="-1" role="dialog" aria-labelledby="form-cadastro-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  btn btn-warning">
        <h5 class="modal-title" id="form-cadastro-title"><b>Cadastro de Usuario:</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <form method="post" action="lib/brain/php/access-key-validate.php">
          <input type="text" name="name" class="form-control" placeholder="Nome Completo:">
          <br>
          <input type="text" name="nasc" class="form-control" placeholder="Data de Nascimento:">
          <br>
          <input type="text" name="email" class="form-control" placeholder="E-Mail:">
          <br>
          <input type="text" name="login" class="form-control" placeholder="Login:">
          <br>
          <input type="text" name="pass" class="form-control" placeholder="Senha:">
          <br>
          <input type="text" name="pass2" class="form-control" placeholder="Repita a Senha:">
          <br>
          <div align="right">
            <input type="submit" name="btn-submit-access-key" value="Validar Chave" class="btn btn-warning">  
          </div>
          </form>
        </div>
      </div>
      <!-- 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      -->
    </div>
  </div>
</div>

<!-- Msg Box -->
<div class="modal fade" id="msgBox" tabindex="-1" role="dialog" aria-labelledby="msgBox-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  btn btn-warning">
        <h5 class="modal-title" id="msgBox-title"><b>Titulo</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <span style="font-size: 20px;" id="msgBox-message">Mensagem</span>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Ok</button>
      </div>
      
    </div>
  </div>
</div>