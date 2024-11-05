<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<!-- START SCRIPT -->
<script src="./js/bootstrap.bundle.min.js"></script>
<!-- END SCRIPT -->

<!-- START NAV -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-marcas">Cadastrar Marcas</a></li>
            <li><a class="dropdown-item" href="?page=listar-marcas">Listar Marcas</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-modelos">Cadastrar Modelos</a></li>
            <li><a class="dropdown-item" href="?page=listar-modelos">Listar Modelos</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-3">
  <div class="row"></div>
    <div class="col"></div>
  <?php 
    switch (@$_REQUEST['page']) {

      case 'cadastrar-marcas':
        include 'cadastrar-marcas.php';
        break;
      
      case 'listar-marcas':
        include 'listar-marcas.php';
        break;

      case 'editar-marcas':
        include 'editar-marcas.php';
        break;

      case 'salvae-marcas':
        include 'salvar-marcas.php';
        break;

      case 'cadastrar-modelos':
        include 'cadastrar-modelos.php';
        break;

      case 'listar-modelos':
        include 'listar-modelos.php';
        break;
      
      case 'editar-modelos':
        include 'editar-modelos.php';
        break;

      case 'salvar_modelos':
        include 'salvar-modelos.php';
        break;
                
      
      default:
        echo '<h1>Seja bem vindo!</h1>';
        break;
    }

  ?>
  

</div>
<!-- END NAV -->

</body>
</html>