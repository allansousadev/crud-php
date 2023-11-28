<?php

switch ($_REQUEST["acao"]) {
  case 'cadastrar':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $data_nasc = $_POST["data_nasc"];

    $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

    $res = $conn->query($sql);
    if ($res == true) {
      echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso!</div>';
      echo '<script>setTimeout(function() { location.href="?page=listar"; }, 2000);</script>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Cadastro sem sucesso. Por favor, tente novamente.</div>';
      echo '<script>setTimeout(function() { location.href="?page=listar"; }, 2000);</script>';
    }
    break;
  case 'editar':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $data_nasc = $_POST["data_nasc"];

    $sql = "UPDATE usuarios SET nome='{$nome}',email='{$email}',senha='{$senha}',data_nasc='{$data_nasc}' WHERE id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Informações atualizadas com sucesso</strong></br>Você será direcionado a página de listagem de usuários
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      echo '<script>setTimeout(function() { location.href="?page=listar"; }, 3000);</script>';
      // echo '<div class="alert alert-success" role="alert">Atualizado com sucesso!</div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>As informações não foram atualizadas</strong></br>Você será direcionado a página de listagem de usuários, por favor entre em contato com o responsável técnico
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      echo '<script>setTimeout(function() { location.href="?page=listar"; }, 3000);</script>';
      // echo '<div class="alert alert-danger" role="alert">Não foi possível editar. Por favor, tente novamente.</div>';
    }
    break;
  case 'excluir':
    # Adicione aqui a lógica para excluir um registro
    break;

  default:
    # code...
    break;
}
