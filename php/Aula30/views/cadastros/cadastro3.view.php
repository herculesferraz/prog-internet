<!-- Colocar o formulário aqui -->
<div class="conteudo-pequeno">
    <h2>Cadastrar Pizza</h2>
    <form action="#" method="post">
      <!-- Nome -->
      <div class="mb-3">
        <label for="idnome">Nome da Pizza</label>
        <input type="text" name="nome" id="idnome" class="form-control" placeholder="Digite o da nome da pizza" required>
      </div>
      <!-- Descrição -->
      <div class="mb-3">
        <label for="iddescricao">Descrição</label>
        <input type="text" name="descricao" id="iddescricao" class="form-control" placeholder="Digite a descrição da pizza" required>
      </div>
      <!-- Valor -->
      <div class="mb-3">
        <label for="idvalor">Valor</label>
        <input type="number" step="0.01" name="valor" id="idvalor" class="form-control" placeholder="Entre com valor da pizza" required>
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
<!-- fim do formulário -->