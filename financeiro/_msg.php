<?php

// Validação para capturar o retorno numerico das mensagens pela URL!

if (isset($_GET['ret'])) {
  $ret = $_GET['ret'];
}

if (isset($ret)) {
  switch ($ret) {
    case 1:
      echo '<div class="alert alert-success">
              Ação realizada com SUCESSO! 
            </div>';
      break;

    case 0:
      echo '<div class="alert alert-warning">
              Preencher os campos OBRIGATÓRIOS!  
            </div>';
      break;

    case -1:
      echo '<div class="alert alert-danger">
              Houve uma FALHA na operação, tente novamente mais tarde!
            </div>';
      break;

    case -2:
      echo '<div class="alert alert-danger">
                  A SENHA deve conter 6 e 8 caracteres!
                </div>';
      break;

    case -3:
      echo '<div class="alert alert-danger">
                      As SENHAS devem ser iguais!
                    </div>';
      break;

    case -4:
      echo '<div class="alert alert-danger">
                      Esse item não pode ser excluído, pois está em uso!
                    </div>';
      break;

    case -5:
      echo '<div class="alert alert-danger">
                      E-mail já cadastrado! Digite outro e-mail para cadastro.
                    </div>';
      break;

    case -6:
      echo '<div class="alert alert-danger">
                      Usuário não encontrado!
                    </div>';
      break;
  }
}
