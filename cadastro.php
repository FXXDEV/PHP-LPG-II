<?php include_once 'src/partials/_head.php'?>
<?php include_once 'src/partials/_navcadastro.php'?>





<section id="form" class="row align-items-center justify-content-center"> 
    
<form action="/src/cadastro_post.php" method="POST" class="col-md-6">


<h1>Formulário de Cadastro </h1>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="n" id="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" class="form-control" name="ln" id="sobrenome" placeholder="Sobrenome">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite apenas números">
    </div>
    <div class="form-group col-md-6">
      <label for="rg">RG</label>
      <input type="text" class="form-control" name="rg" id="rg" placeholder="Digite apenas números">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="tfm">Telefone Celular</label>
      <input type="text" class="form-control" name="tfc" id="tfc" placeholder="(00)00000-0000">
    </div>
    <div class="form-group col-md-6">
      <label for="tfr">Telefone Residencial</label>
      <input type="text" class="form-control" name="tfr" id="tfr" placeholder="(00)0000-0000">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="exemplo@exemplo.com">
    </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Sua rua, seu bairro...">
  </div>
  <div class="form-group">
    <label for="complemento">Complemento</label>
    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Apartmento, casa, sítio...">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="estado">Estado</label>
      <select id="estado" class="form-control" name="estado">
        <option selected>Selecione</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="cep">CEP</label>
      <input type="text" name="cep" class="form-control" id="cep" placeholder="00000-000">
    </div>
  </div>
  <div id="center">
  <div class="down">
    <a href="/src/downloads/Termos-Servico.doc">Clique aqui para efetuar o download dos termos de serviço</a>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="aceito" name="aceito">
      <label class="form-check-label" for="aceito">
        Li e aceito os termos
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary"id="Cadastrar">Cadastrar</button>
  </div>
</form>

</section>



<?php include_once 'src/partials/_footer.php'?>
</body>


</html>
