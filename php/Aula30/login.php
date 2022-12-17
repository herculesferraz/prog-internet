<?php

use Classes\User;

  require_once(__DIR__ . "/common/cabecalho.php");
  //Aqui colocarei o corpo se precisar

  require_once(__DIR__ . "/views/login.view.php");

  if ($_POST) {
    $tipoMsg = "text-bg-danger";
    $msg = "Ocorreu um problema ao logar!";
    // Verificando se a senha e resenha são as mesmas para poder gravar dados
    if (User::login($_POST["email"], $_POST["senha"]))
    $tipoMsg = "text-bg-success";
    $msg = "Login efetuado com sucesso!";
    $_SESSION["logado"]= true
  ?>
    <!-- Toast (box de notificação) -->
    <div aria-live="polite" aria-atomic="true" class="position-relative">
      <div class="toast-container bottom-0 end-0 p-3">
        <div id="avisoToast" class="toast align-items-center <?= $tipoMsg ?> border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-autohide="true" data-bs-delay="5000" data-url="<?=URL_BASE?>index.php">
          <div class="d-flex">
            <div class="toast-body">
              <?= $msg ?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
  <?php
  }

  require_once(__DIR__ . "/common/rodape.php");