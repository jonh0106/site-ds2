<?php session_start();

$email = $_POST['email'];

$senha = $_POST['senha'];

$_SESSION['dadosForm'] = $_POST;

$_SESSION['mensagemErro'] = array();

if( strlen($email) == 0 ){
    $_SESSION['mensagemErro'][] = "O E-mail e obrigatório";
}

if( strlen($senha) == 0 ){
    $_SESSION['mensagemErro'][] = " A senha é obrigatoria";
}

include('connection/conexao.php');

$consultaUsuario = " SELECT * FROM tbl_login WHERE email='$email' AND senha=MD5('$senha') ";

$execultaConsulta = $mysqli->query($consultaUsuario);

$totalLinhas = $execultaConsulta->num_rows;

if( $totalLinhas == 0){

    $_SESSION['mensagemErro'][] = "Usuario ou senha inválidos";

}

$dadosUsuario = $execultaConsulta->fetch_assoc();


if( $dadosUsuario['status_login'] == 0 && $totalLinhas > 0 ){

    $codAtivacao = $dadosUsuario['cod_ativacao'];

    $mensagem = "Você ainda não ativou a sua conta <br> 
                 <a href='ativa-conta.php?codAtivacao=$codAtivacao'> Ativar agora </a>";

    $_SESSION['mensagemErro'][] = $mensagem;

}

if(sizeof($_SESSION['mensagemErro']) > 0 ){

    header("location:login.php?erro=1");

}else{

    // eliminas as variaveis de sessao com mensagem de erro
    unset($_SESSION['mensagemErro']);
    unset($_SESSION['dadosForm']);

    // armazenar alguns dados de sessao do usuario
    $_SESSION['cod_login'] = $dadosUsuario['cod_login'];
    $_SESSION['nome'] = $dadosUsuario['nome'];

    header("location:admin/index.php");
}

?>