<!-- Colocar o formulário aqui -->
<div class="conteudo-pequeno">
    <h2>Login</h2>
    <form action="#" method="post">
      <!-- Email -->
      <div class="mb-3">
        <label for="idEmail">Email</label>
        <input type="email" name="email" id="idEmail" class="form-control" placeholder="Digite seu email" required>
      </div>
      <!-- Senha -->
      <div class="mb-3">
        <label for="idSenha">Senha</label>
        <input type="password" name="senha" id="idSenha" class="form-control" placeholder="Digite sua senha aqui" required>
      </div>
      <!-- Botões de confirmação e limpeza -->
      <div class="row">
        <div class="col-md-6">
          <button type="submit" class="btn btn-success">Login</button>
        </div>
        <div class="col-md-6">
          <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
      </div>
    </form>
  </div>
<!-- fim do formulário -->