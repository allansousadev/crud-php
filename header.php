<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Menu</a>
        <button class="navbar-toggler border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?page=cadastrar">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?page=listar">Listar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container mt-3 text-center">
    <?php
    include("./connection.php");
    switch (@$_REQUEST["page"]) {
      case 'cadastrar':
        include("insert-user.php");
        break;
      case 'listar':
        include("list-user.php");
        break;
      case 'salvar':
        include("save-user.php");
        break;
      case 'editar':
        include("edit-user.php");
        break;

      default:
        echo "<h1>Seja, bem vindo!</h1>";
        break;
    }
    ?>
  </div>