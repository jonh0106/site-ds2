<?php session_start(); 

print_r($_POST);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$checkbox = @$_POST['checkbox'];

$_SESSION['dadosForm'] = $_POST;

$_SESSION['mensagemErro'] = array();

if( strlen($nome) == 0 ){
    $_SESSION['mensagemErro'][] = " O nome e obrigatório";
}

if( strlen($email) == 0 ){
    $_SESSION['mensagemErro'][] = " O E-mail e obrigatório";
}

if( strlen($senha) < 6 ){
    $_SESSION['mensagemErro'][] = " A senha deve ter no minimo 6 caracteres";
}

if( $confirmaSenha <> $senha){
    $_SESSION['mensagemErro'][] = "As senhas nao conferem";
}

if( $checkbox != "on"){
    $_SESSION['mensagemErro'][] = "Voce deve aceitar os termos";
}

if( sizeof($_SESSION['mensagemErro']) > 0 ){
                
    header("location:registro.php?erro=1");

}else{

  echo "Tudo ok, Cadastrar o usuario";

}


print_r($_SESSION['mensagemErro']);

?>