<?php
echo "<h1>Formulário de cadastro</h1>";
?>

<div class="container shadow p-3 mb-5 mt-5 bg-body- rounded">
  <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
      <label for="exampleInputName" class="form-label d-flex justify-content-start">Nome</label>
      <input type="text" name="nome" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Informe seu nome">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">E-mail</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe seu E-mail">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label d-flex justify-content-start">Password</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputDate" class="form-label d-flex justify-content-start">Data Nascimento</label>
      <input type="date" name="data_nasc" class="form-control" id="exampleInputDate" aria-describedby="dateHelp">
    </div>
    <button type="submit" class="btn btn-success d-flex justify-content-start">Enviar</button>
  </form>
</div>