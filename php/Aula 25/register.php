<?php
  require_once(__DIR__ . "/common/cabecalho.php");
?>
  <div class="conteudo-pequeno">
    <h2>Formulário de registro</h2>
    <form action="register_conf.php" method="post">
      <!-- Nome -->
      <div class="mb-3">
        <label for="idnome">Nome</label>
        <input type="text" name="nome" id="idnome" class="form-control" placeholder="Digite seu nome" required>
      </div>
      <!-- E-mail -->
      <div class="mb-3">
        <label for="idemail">E-mail</label>
        <input type="email" name="email" id="idemail" class="form-control" placeholder="Digite seu E-Mail" required>
      </div>
      <!-- Senha -->
      <div class="mb-3">
        <label for="idsenha">Senha</label>
        <input type="password" name="senha" id="idsenha" class="form-control" placeholder="Entre com sua Senha" required>
      </div>
      <!-- Resenha -->
      <div class="mb-3">
        <label for="idredsenha">Redigite Senha</label>
        <input type="password" name="resenha" id="idredsenha" class="form-control" placeholder="Redigite sua senha" required>
      </div>
      <!-- Botões de confirmação e limpeza -->
      <div class="row">
        <div class="col-md-6">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
        <div class="col-md-6">
          <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
      </div>
    </form>
  </div>
<?php
  require_once(__DIR__ . "/common/rodape.php");