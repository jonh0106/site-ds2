<?php @session_start();

  // se a sessao com o codigo do usuario nao existir redirecionamos para a tela de login

  if( !isset($_SESSION['cod_login']) ){
      header("location:../login.php");
  }


?>