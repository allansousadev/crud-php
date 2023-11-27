<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <main>
    <div class="container">
      <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">CRUD PHP</a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Usuários</h5>
              <button type="button" class="btn-close btn-close-white border-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="?page=novo">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="?page=listar">Listar</a>
                </li>
                <form class="d-flex mt-3" role="search">
                  <input class="form-control me-2" type="search" placeholder="Digite o que procura" aria-label="Search">
                  <button class="btn btn-primary" type="submit">Pesquisar</button>
                </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </main>

  <div class="container">
    <?php
    switch (@$_REQUEST["page"]) {
      case 'novo':
        include("insert-user.php");
        break;
      case 'listar':
        include("list-user.php");
        break;

      default:
        echo "<h1>Seja bem vindo!</h1>";
        break;
    }
    ?>
  </div>


  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>