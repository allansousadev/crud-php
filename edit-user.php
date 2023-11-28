<?php
echo "<h1>Editar Usuário</h1>";

$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];

$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<div class="container shadow p-3 mb-5 mt-5 bg-body- rounded">
  <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo "$row->id"; ?>">
    <div class=" mb-3">
      <label for="exampleInputName" class="form-label d-flex justify-content-start">Nome</label>
      <input type="text" name="nome" value="<?php echo "$row->nome"; ?>" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Informe seu nome">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">E-mail</label>
      <input type="email" name="email" value="<?php echo "$row->email"; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe seu E-mail">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label d-flex justify-content-start">Password</label>
      <input type="password" name="senha" required class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputDate" class="form-label d-flex justify-content-start">Data Nascimento</label>
      <input type="date" name="data_nasc" value="<?php echo "$row->data_nasc"; ?>" class="form-control" id="exampleInputDate" aria-describedby="dateHelp">
    </div>
    <button type="submit" class="btn btn-success d-flex justify-content-start rounded">Enviar</button>
    <a href="./list-user.php">
      <button type="submit" class="btn btn-primary d-flex justify-content-start rounded mt-4">Voltar</button>
    </a>
  </form>
</div>