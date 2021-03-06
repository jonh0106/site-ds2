<?php @session_start(); 

   include("verifica-logado.php");

?>
<!DOCTYPE html>
<!-- saved from url=(0063)https://getbootstrap.com.br/docs/4.1/examples/starter-template/ -->
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon/icon.ico">

  <title>Template inicial, usando Bootstrap.</title>

  <!-- Principal CSS do Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos customizados para esse template -->
  <link href="../css/starter-template.css" rel="stylesheet">
  <script src="../js/fontawesome.js"></script>
</head>

<body cz-shortcut-listen="true">

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="https://getbootstrap.com.br/docs/4.1/examples/starter-template/#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://getbootstrap.com.br/docs/4.1/examples/starter-template/#">Home <span class="sr-only">(atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://getbootstrap.com.br/docs/4.1/examples/starter-template/#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="https://getbootstrap.com.br/docs/4.1/examples/starter-template/#">Desativado</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
          <?php echo $_SESSION['nome'] ?> </a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="https://getbootstrap.com.br/docs/4.1/examples/starter-template/#">Editar perfil</a>
            <a class="dropdown-item" href="https://getbootstrap.com.br/docs/4.1/examples/starter-template/#">Alterar senha</a>
          </div>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">

        <a href="logoff.php" class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-sign-out-alt"></i> Sair </a>
      </div>
    </div>
  </nav>

  <main role="main" class="container">

    <div class="starter-template">
      <h1>Template Bootstrap inicial</h1>
      <p class="lead">Use este documento como uma maneira de iniciar um novo projeto, rapidamente.<br>Tudo oqu?? voc?? come??a ?? com este texto e um documento HTML (quase vazio).</p>
    </div>

    </div>



  </main><!-- /.container -->

  <!-- Principal JavaScript do Bootstrap
    ================================================== -->
  <!-- Foi colocado no final para a p??gina carregar mais r??pido -->
  <script src="../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>


</body>

</html>